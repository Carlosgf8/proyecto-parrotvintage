<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RopaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PedidoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/productos', [RopaController::class, 'index'])->name('productos');
Route::get('/favoritos', [RopaController::class, 'mostrarFavoritos'])->name('favoritos');
Route::get('/ropa/{id}', [RopaController::class, 'aniadirRopaToCart'])->name('aniadirropa.to.cart');
Route::get('/productos/buscar', [RopaController::class, 'buscar'])->name('productos.buscar');
Route::get('/shopping-cart', [RopaController::class, 'ropaCart'])->name('shopping.cart');
Route::patch('/update-shopping-cart', [RopaController::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [RopaController::class, 'deleteProduct'])->name('delete.cart.product');
Route::delete('/ropa/favoritos/{ropa}', [RopaController::class, 'eliminarFavorito'])->name('ropa.favoritos.eliminar');
Route::get('/home', [RopaController::class, 'getRandomProducts'])->name('home');
Route::post('/ropa/favoritos/{ropa}', [RopaController::class, 'toggleFavorito'])->name('ropa.favoritos.toggle');
Route::post('/ropa/carrito/{ropa}', [RopaController::class, 'aniadirRopaToCartDesdeFavoritos'])->name('ropa.carrito.aniadir');
Route::get('/admin-login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin-login', [AdminController::class, 'login'])->name('admin.login');
Route::get('dashboard', [RopaController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/borrar-producto', [RopaController::class, 'mostrarBorrar'])->name('mostrar.borrar');
Route::delete('/borrar-producto/{id}', [RopaController::class, 'borrarProducto'])->name('borrar.producto');

Route::get('/modificar-producto', [RopaController::class, 'mostrarRopas'])->name('mostrar.modificar');
Route::get('/ropa/{id}/editar', [RopaController::class, 'mostrarEditar'])->name('editar.ropa');
Route::put('/ropa/{id}/editar', [RopaController::class, 'actualizar'])->name('actualizar.ropa');

Route::get('/agregar-producto', [RopaController::class, 'mostrarFormularioAgregar'])->name('mostrar.formulario.agregar');
Route::post('/agregar-producto', [RopaController::class, 'agregarProducto'])->name('agregar.producto');

Route::get('/recibo-compra', [RopaController::class, 'mostrarRecibo'])->name('recibo.compra');

Route::post('/guardar-pedido', [PedidoController::class, 'guardarPedido'])->name('guardar.pedido');

Route::get('/ver-registro-pedidos', [PedidoController::class, 'verRegistroPedidos'])->name('ver.registro.pedidos');

Route::get('/guia-tallas', [RopaController::class, 'mostrarGuiaTallas'])->name('guia.tallas');

Route::get('/registro-pedidos', [PedidoController::class, 'mostrarRegistroPedidos'])->name('registro.pedidos');