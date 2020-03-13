<?php

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::resource('productos', 'productoController');

Route::resource('cierreCaja', 'cierreCajaController');

Route::resource('compras', 'comprasController');

Route::resource('creditoCliente', 'creditoClienteController');

Route::resource('creditoProveedor', 'creditoProveedorController');

Route::resource('devoluciones', 'devolucionesController');

Route::resource('proveedores', 'proveedorController');

Route::resource('ventas', 'ventasController');

Route::resource('usuarios', 'usuariosController');
Route::get('usuarios/{id}/destroy', ['uses' => 'usuariosController@destroy', 'as' => 'usuarios.destroy']);

Route::resource('productos', 'productoController');
Route::get('productos/{id}/destroy', ['uses' => 'productoController@destroy', 'as' => 'productos.destroy']);

Route::resource('cierreCaja', 'cierreCajaController');	
Route::get('cierreCaja/{id}/destroy', ['uses' => 'cierreCajaController@destroy', 'as' => 'cierreCaja.destroy']);

Route::resource('proveedores', 'ProveedorController');	
Route::get('proveedores/{id}/destroy', ['uses' => 'ProveedorController@destroy', 'as' => 'proveedores.destroy']);

Route::get('creditoProveedor/{id}/destroy', ['uses' => 'creditoProveedorController@destroy', 'as' => 'creditoProveedor.destroy']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');