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

Route::get('/', 'AuthController@index')->name('auths.index')->middleware('guest');
Route::post('auths/login', 'AuthController@login')->name('auths.login');

Route::get('/admin', 'PersonaController@admin')->name('admin')->middleware('auth');

Route::post('auths/logout', 'AuthController@logout')->name('auths.logout');


Route::get('auths/create', 'AuthController@create')->name('auths.create');
Route::post('auths/store', 'AuthController@store')->name('auths.store');
// Route::get('auths/show/{id}', 'AuthController@show')->name('auths.show');
// Route::get('auths/{id}/edit', 'AuthController@edit')->name('auths.edit');
// Route::put('auths/update/{id}', 'AuthController@update')->name('auths.update');
// Route::delete('auths/destroy/{id}', 'AuthController@destroy')->name('auths.destroy');


//plantila administrador

//Router persona
Route::get('/registro_login', 'PersonaController@registro')->name('registro_login'); // registro de persona desde el LOGIN
Route::get('/inicio', 'PersonaController@inicio')->name('inicio'); // cancelar registro y dirijirse a la pagina de inicio 
// Route::get('/listar_persona', 'PersonaController@index')->name('listar_persona');
// Route::get('/almacenar_persona', 'PersonaController@create')->name('almacenar_persona');
Route::get('/registrar_persona', 'PersonaController@store')->name('registrar_persona');
Route::get('/almacen_lista', 'PersonaController@almacen_lista')->name('almacen_lista');

// Route::get('/editar_persona{id}', 'PersonaController@edit')->name('editar_persona');
// Route::get('/modificar_registro{id}', 'PersonaController@update')->name('modificar_registro');
// Route::get('/estado_registro{id}', 'PersonaController@destroy')->name('estado_registro');

/*********************************** MODULO ALMACEN ***********************************/

/* ------------------------- REGISTRO DE PRODUCTOS ------------------------- */
Route::get('/registro_producto', 'ProductoController@create')->name('registro_producto');
Route::post('/almacenar_producto', 'ProductoController@store')->name('almacenar_producto');
Route::get('/listar_producto', 'ProductoController@index')->name('listar_producto');
Route::Get('producto_caracteristicas/{id}', 'ProductoController@caracteristica_producto'); // ruta de ajax para obtener las caracteristicas del producto


/* ------------------------- REGISTRO DE ALMACEN ------------------------- */
Route::get('/registro_almacen', 'AlmacenController@create')->name('registro_almacen');
Route::post('/almacenar_almacen', 'AlmacenController@store')->name('almacenar_almacen');

/* ------------------------- REGISTRO DE ALMACEN/PRODUCTO ------------------------- */
Route::get('/registro_almacenproducto', 'AlmacenproductoController@create')->name('registro_almacenproducto');
// Route::post('/almacenar_almacen', 'AlmacenproductoController@store')->name('almacenar_almacen');

/*********************************** MODULO COMPRAS ***********************************/

/* ------------------------- REGISTRO DE EMPRESA ------------------------- */
Route::get('/registro_empresa', 'EmpresaController@create')->name('registro_empresa');
Route::post('/almacenar_empresa', 'EmpresaController@store')->name('almacenar_empresa');

/* ------------------------- COMPRA DE PRODUCTOS ------------------------- */
Route::get('/registro_compra', 'CompraController@create')->name('registro_compra');
Route::post('/almacenar_compra', 'CompraController@store')->name('almacenar_compra');

/* ------------------------- VENTAS ----------------------------------------------------- */
// Route::get('/ventas_hoy', 'ventasController@index')->name('ventas.index');
// Route::get('/nueva_factura', 'ventasController@create')->name('nueva_factura.create');
// Route::get('/revisar_facturas', 'ventasController@show')->name('revisar_facturas.show');
// Route::get('/ver_factura/{id}', 'ventasController@ver')->name('ver_factura');
// Route::get('/buscar_producto','ventasController@buscar_producto')->name('buscar_producto');

//---------------------------------- CLIENTES -------------------------------------------------

Route::get('clientes', 'ClienteController@index')->name('clientes.index');
Route::get('clientes/create', 'ClienteController@create')->name('clientes.create');
Route::post('clientes/store', 'ClienteController@store')->name('clientes.store');
Route::get('clientes/show/{id}', 'ClienteController@show')->name('clientes.show');
Route::get('clientes/{id}/edit', 'ClienteController@edit')->name('clientes.edit');
Route::put('clientes/update/{id}', 'ClienteController@update')->name('clientes.update');
Route::delete('clientes/destroy/{id}', 'ClienteController@destroy')->name('clientes.destroy');

//-------------------------------VENTAS--------------------------------------------------------
Route::get('ventas', 'VentaController@index')->name('ventas.index');
Route::get('ventas/create', 'VentaController@create')->name('ventas.create');
Route::post('ventas/store', 'VentaController@store')->name('ventas.store');
Route::get('ventas/show/{id}', 'VentaController@show')->name('ventas.show');
// Route::get('ventas/{id}/edit', 'VentaController@edit')->name('ventas.edit');
// Route::put('ventas/update/{id}', 'VentaController@update')->name('ventas.update');
// Route::delete('ventas/destroy/{id}', 'VentaController@destroy')->name('ventas.destroy');
//--------------------------- miniClientes------------------------------------------------------
Route::get('miniclientes', 'miniClienteController@index')->name('miniCliente.index');
Route::post('miniclientes/store', 'miniClienteController@store')->name('miniCliente.store');
Route::post('ventas/uno', 'VentaController@uno')->name('ventas.uno');

/* ------------------------- PROVEEDORES ----------------------------------------------------- */
Route::get('/registro_proveedor', 'ProveedorController@create')->name('registro_proveedor');
Route::post('/almacenar_proveedor', 'ProveedorController@store')->name('almacenar_proveedor');
/* ------------------------- REGISTRO DE CONTACTO PROVEEDOR ------------------------- */
Route::get('/registro_contacto_proveedor', 'ContactoProveedorController@create')->name('registro_contacto_proveedor');
Route::post('/almacenar_contacto_proveedor', 'ContactoProveedorController@store')->name('almacenar_contacto_proveedor');

/* ------------------------- CARACTERISITICAS DE PRODUCTO ------------------------- */
// Route::get('/registro_caracteristica_producto', 'TipoProductoController@create')->name('registro_caracteristica_producto');
// Route::post('/almacenar_caracteristica_producto', 'TipoProductoController@store')->name('almacenar_caracteristica_producto');

/* ------------------------- TIPO DE PRODUCTO ------------------------- */
Route::get('/registro_tipo_producto', 'TipoProductoController@create')->name('registro_tipo_producto');
Route::post('/almacenar_tipo_producto', 'TipoProductoController@store')->name('almacenar_tipo_producto');


/* -------------------------------- SUCURSAL ------------------------------- */
Route::get('/registro_sucursal', 'SucursalController@create')->name('registro_sucursal');
Route::post('/almacenar_sucursal', 'SucursalController@store')->name('almacenar_sucursal');
