<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ropa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RopaController extends Controller
{

    //Devuelve todos los datos de todas las 'ropas' en la vista de 'productos'.
    public function index()
    {
        $ropas = Ropa::all();
        return view('productos', compact('ropas'));
    }

    //Añade los productos al carrito.
    public function aniadirRopatoCart($id)
    {
        $ropa = Ropa::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $ropa->name,
                "quantity" => 1,
                "price" => $ropa->price,
                "image" => $ropa->image,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Perfecto. Su prenda se ha añadido al carrito');
    }

    //Busca los productos en la barra de busqueda en la vista 'productos'.
    public function buscar(Request $request)
    {
        $terminoBusqueda = $request->input('buscar');


        $productos = Ropa::where('name', 'like', '%' . $terminoBusqueda . '%')
            ->orWhere('description', 'like', '%' . $terminoBusqueda . '%')
            ->orWhere('type', 'like', '%' . $terminoBusqueda . '%')
            ->orWhere('size', 'like', '%' . $terminoBusqueda . '%')
            ->orWhere('color', 'like', '%' . $terminoBusqueda . '%')
            ->orWhere('brand', 'like', '%' . $terminoBusqueda . '%')
            ->orWhere('type', 'like', '%' . $terminoBusqueda . '%')
            ->get();

        return view('productos', ['ropas' => $productos]);
    }

    //Devuelve la vista del carrito.
    public function ropaCart()
    {
        return view('cart');
    }

    //Actualiza los productos que hay en el carrito.
    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            
        }
    }

    //Elimina un producto del carrito.
    public function deleteProduct(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            
        }
    }

    //Devuelve en la vista 'home' 8 productos random de la base de datos.
    public function getRandomProducts()
    {
        $randomProducts = Ropa::inRandomOrder()->limit(8)->get();
        return view('home', compact('randomProducts'));
    }

    //Añade o elimina un producto de favoritos.
    public function toggleFavorito(Ropa $ropa)
    {

        if (Auth::check()) {
            $user = Auth::user();


            if ($user->ropasFavoritas->contains($ropa)) {
                $user->ropasFavoritas()->detach($ropa);
                $message = 'Prenda ELIMINADA de favoritos';

            } else {
                $user->ropasFavoritas()->attach($ropa);
                $message = 'Prenda AÑADIDA a favoritos (para eliminar desde aquí pulsa otra vez el boton FAVORITOS)';
            }

            return redirect()->back()->with('success', $message);
        }


        return redirect()->route('login')->with('error', 'Inicia sesión para gestionar favoritos');
    }

    //Devuelve todos los productos favoritos en la vista 'favoritos'.
    public function mostrarFavoritos()
    {

        if (Auth::check()) {

            $favoritos = Auth::user()->ropasFavoritas;


            return view('favoritos', ['favoritos' => $favoritos]);
        }


        return redirect()->route('login')->with('error', 'Inicia sesión para ver favoritos');
    }

    //Elimina un producto de favoritos.
    public function eliminarFavorito(Ropa $ropa)
    {

        if (Auth::check()) {
            $user = Auth::user();


            $user->ropasFavoritas()->detach($ropa);

            return redirect()->back()->with('success', 'Prenda eliminada de favoritos');
        }


        return redirect()->route('login')->with('error', 'Inicia sesión para gestionar favoritos');
    }

    //Añade un producto al carrito desde la vista de 'favoritos'.
    public function aniadirRopaToCartDesdeFavoritos(Ropa $ropa)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$ropa->id])) {
            $cart[$ropa->id]['quantity']++;
        } else {
            $cart[$ropa->id] = [
                "name" => $ropa->name,
                "quantity" => 1,
                "price" => $ropa->price,
                "image" => $ropa->image,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Prenda añadida al carrito desde favoritos');
    }

    //Mostrar el panel de administracion
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    //Mostrar todos los productos para borrar
    public function mostrarBorrar()
    {
        $productos = Ropa::all();
    return view('admin.ropaborrar')->with('productos', $productos);
    }

    //Eliminar producto de la tabla favoritos y de la tabla de productos
    public function borrarProducto($id)
{
    try {
        DB::beginTransaction();

        
        DB::table('favorites')->where('ropa_id', $id)->delete();

        
        $ropa = Ropa::find($id);
        if ($ropa) {
            $ropa->delete();
        }

        DB::commit();

        return redirect()->route('mostrar.borrar')->with('success', 'Prenda eliminada correctamente');
    } catch (\Exception $e) {
        DB::rollback();
        return redirect()->route('mostrar.borrar')->with('error', 'Error al eliminar la prenda.');
    }
}

//Mostrar los productos en el area de modificar
public function mostrarRopas()
{
    $ropas = Ropa::all();
    return view('admin.mostrarmodificar', compact('ropas'));
}

//Mostrar el formulario del producto a modificar
public function mostrarEditar($id)
{
    $ropa = Ropa::find($id);
    return view('admin.ropamodificar', compact('ropa'));
}

//Actualizar una vez modificado
public function actualizar(Request $request, $id)
{
    $ropa = Ropa::find($id);
    $ropa->update($request->all());
    return redirect()->route('mostrar.modificar')->with('success', 'Se ha modificado la prenda correctamente');
}

//Mostrar el formulario para añadir un producto
public function mostrarFormularioAgregar()
{
    return view('admin.agregarproducto');
}

//Agregar el producto una vez creado
public function agregarProducto(Request $request)
{
    Ropa::create([
        'name' => $request->input('name'),
        'type' => $request->input('type'),
        'size' => $request->input('size'),
        'color' => $request->input('color'),
        'description' => $request->input('description'),
        'brand' => $request->input('brand'),
        'price' => $request->input('price'),
        'image' => $request->input('image'),
      
    ]);

    return redirect()->route('mostrar.modificar')->with('success', 'Producto agregado correctamente');
}

//Mostrar la vista del recibo
public function mostrarRecibo()
{
    return view('recibo');
}

//Mostrar la guia de tallas
public function mostrarGuiaTallas()
    {
        return view('guiatallas');
    }
}
