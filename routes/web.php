<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AuthController@index')->name('auths.index')->middleware('guest');
Route::get('auths/list', 'AuthController@list')->name('auths.list')->middleware('auth');
Route::post('auths/login', 'AuthController@login')->name('auths.login');
Route::get('/admin', 'PersonaController@admin')->name('admin')->middleware('auth');
Route::post('auths/logout', 'AuthController@logout')->name('auths.logout');
Route::get('auths/create', 'AuthController@create')->name('auths.create');
Route::post('auths/store', 'AuthController@store')->name('auths.store');
Route::get('auths/show/{id}', 'AuthController@show')->name('auths.show');
Route::get('auths/{id}/edit', 'AuthController@edit')->name('auths.edit');
Route::put('auths/update/{id}', 'AuthController@update')->name('auths.update');

//Router Auth or auth
Route::get('/login', 'ConnectController@getLogin')->name('login');
Route::post('/login_user', 'ConnectController@postLogin')->name('login_user');
Route::get('/registro_usuario', 'ConnectController@getRegistro_usuario')->name('registro_usuario');
Route::post('/almacenar_usuario', 'ConnectController@postAlmacenar_usuario')->name('almacenar_usuario');
Route::get('/listar_usuario', 'ConnectController@getListar_Usuario')->name('listar_usuario');
Route::get('/registro_usuario_admin', 'ConnectController@getRegistro_Usuario_Adm')->name('registro_usuario_admin');
Route::get('/actualizar_registro_usuario{id}', 'ConnectController@actualizarDatosUsuario')->name('actualizar_registro_usuario');
Route::post('/modificar_datos_usuario', 'ConnectController@modificarDatosUsuarios')->name('modificar_datos_usuario');
Route::get('/estado_datos_usuario{id}', 'ConnectController@estadoDatosUsuarios')->name('estado_datos_usuario');
Route::post('/registro_administrador', 'ConnectController@registroAdministrador')->name('registro_administrador');

//Perosonal
Route::get('/cajero', function(){return view('layouts.cajero');})->name('cargo.cajeros');
Route::get('/almacenero', function(){return view('layouts.almacenero');})->name('cargo.almaceneros');
Route::get('/chofer', function(){return view('layouts.chofer');})->name('cargo.choferes');
Route::get('/ejecutivo_de_venta', function(){return view('layouts.ejecutivo');})->name('cargo.ejecutivo_de_ventas');

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
Route::get('producto_caracteristicas/{id}', 'ProductoController@caracteristica_producto'); // ruta de ajax para obtener las caracteristicas del producto


/* ------------------------- REGISTRO DE ALMACEN ------------------------- */
Route::get('/registro_almacen', 'AlmacenController@create')->name('registro_almacen');
Route::post('/almacenar_almacen', 'AlmacenController@store')->name('almacenar_almacen');
// Route::get('/listar_almacen', 'AlmacenController@index')->name('listar_almacen');

/* ------------------------- REGISTRO DE ALMACEN/PRODUCTO ------------------------- */
Route::get('/registro_almacenproducto', 'AlmacenproductoController@create')->name('registro_almacenproducto');
Route::post('/almacenar_almacenproducto', 'AlmacenproductoController@store')->name('almacenar_almacenproducto');
Route::get('/listar_almacenproducto', 'AlmacenproductoController@index')->name('listar_almacenproducto');
/*********************************** MODULO COMPRAS ***********************************/

/* ------------------------- REGISTRO DE EMPRESA ------------------------- */
Route::get('/registro_empresa', 'EmpresaController@create')->name('registro_empresa');
Route::post('/almacenar_empresa', 'EmpresaController@store')->name('almacenar_empresa');

/* ------------------------- COMPRA DE PRODUCTOS ------------------------- */
Route::get('/registro_compra', 'CompraController@create')->name('registro_compra');
Route::post('/almacenar_compra', 'CompraController@store')->name('almacenar_compra');
Route::get('/listar_compra', 'CompraController@index')->name('listar_compra');
Route::Get('datos_proveedor/{id}', 'CompraController@proveedor'); // ruta de ajax para obtener la imagen del producto


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
Route::get('reporteGeneral','VentaController@reporteGeneral')->name('reporteGeneral');

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

/* ------------------------------------ VEHICULOS ------------------------------------- */
Route::get('/listar_vehiculo', 'VehiculoController@index')->name('listar_vehiculo');
Route::get('/registrar_vehiculo', 'VehiculoController@create')->name('registrar_vehiculo');
Route::post('/almacenar_vehiculo', 'VehiculoController@store')->name('almacenar_vehiculo');

/* -------------------------------- ENTREGA DE PEDIDOS  ------------------------------- */
Route::get('/entrega_pedidos', 'PedidoController@index')->name('entrega_pedidos');
Route::get('/registrar_pedidos', 'PedidoController@create')->name('registrar_pedidos');
Route::post('/almacenar_pedidos', 'PedidoController@store')->name('almacenar_pedidos');

