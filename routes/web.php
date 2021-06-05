<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('principal');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/compras', function () {
    return view('compras');
});


Route::get('/carrito', function () {
    return view('usuario.carrito');
});

Route::get('/acerca', function () {
    return view('usuario.about_us');
});

Route::get('/detalles', function () {
    return view('detalles');
});


Route::get('/verificar', function () {
    return view('verificar');
});



Auth::routes();
Route :: resource('categorias', 'App\Http\Controllers\CategoriaController');
Route :: resource('proveedores', 'App\Http\Controllers\ProveedoreController');
Route :: resource('productos', 'App\Http\Controllers\ProductoController');

Route :: resource('detallepedidos', 'App\Http\Controllers\DetallepedidoController');
Route :: resource('pagos', 'App\Http\Controllers\PagoController');
Route :: resource('ordenes', 'App\Http\Controllers\OrdeneController');
Route :: resource('clientes', 'App\Http\Controllers\ClienteController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/compras', [App\Http\Controllers\ComprasController::class, 'index'])->name('compras');
Route::get('/verificar', [App\Http\Controllers\VerificarController::class, 'index'])->name('verificar');
Route::get('/principal', [App\Http\Controllers\PrincipalController::class, 'index'])->name('principal');
Route::get('/detalles', [App\Http\Controllers\DetallesController::class, 'index'])->name('detalles');
