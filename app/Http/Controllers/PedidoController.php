<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido; 
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    //Guardar el pedido en la BD
    public function guardarPedido(Request $request)
    {
        
        $cart = session('cart');
        $totalQuantity = 0;
        $total = 0;

        foreach ($cart as $id => $details) {
            $totalQuantity += $details['quantity'];
            $subtotal = $details['price'] * $details['quantity'];
            $total += $subtotal;
        }

      
        $pedido = new Pedido();
        $pedido->nombre_usuario = auth()->user()->name;
        $pedido->precio = $total;
        $pedido->cantidad_articulos = $totalQuantity;
        $pedido->save();

       
        return redirect()->route('productos')->with('success', 'Compra realizada exitosamente');
    }

    //Mostrar todos los pedidos de la tienda
    public function verRegistroPedidos()
    {
        $pedidos = Pedido::all();

        return view('admin.verpedidos', compact('pedidos'));
    }

    //Muestra los pedidos que ha hecho el usuario
    public function mostrarRegistroPedidos()
    
    {
       
        $user = Auth::user();
    
        
        $pedidos = Pedido::where('nombre_usuario', $user->name)->get();
    
        return view('registropedidos', ['pedidos' => $pedidos]);
    }
}
