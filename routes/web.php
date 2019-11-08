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
    return view('auth/login');
});

Route::resource('combustible/unidad','UnidadController');
Route::match(['PUT','PATCH'],'combustible/unidad/{idUnidad}','UnidadController@update')->name('combustible.unidad.update');

Route::resource('combustible/colaboradores','ColaboradorController');
Route::match(['PUT','PATCH'],'combustible/colaboradores/{idColaborador}','ColaboradorController@update')->name('combustible.colaboradores.update');

Route::resource('combustible/vehiculo','VehiculoController');
Route::match(['PUT','PATCH'],'combustible/vehiculo/{idVehiculo}','VehiculoController@update')->name('combustible.vehiculo.update');

Route::resource('combustible/proveedor','ProveedorController');
Route::match(['PUT','PATCH'],'combustible/proveedor/{idProveedor}','ProveedorController@update')->name('combustible.proveedor.update');


Route::resource('combustible/asignacion','AsignacionController');
Route::match(['PUT','PATCH'],'combustible/asignacion/{idAsignacion}','AsignacionController@update')->name('combustible.asignacion.update');


Route::resource('combustible/compras','CompraController');
Route::match(['PUT','PATCH'],'combustible/compras/{idCompra}','CompraController@update')->name('combustible.compras.update');

Route::resource('combustible/solicitud','SolicitudVehiculoController');
Route::match(['PUT','PATCH'],'combustible/compras/{idCompra}','CompraController@update')->name('combustible.compras.update');

Route::resource('combustible/vale','ValeController');
Route::match(['PUT','PATCH'],'combustible/vale/{idVale}','ValeController@update')->name('combustible.vale.update');

Route::resource('combustible/comb','CombController');
Route::match(['PUT','PATCH'],'combustible/comb/{idCombustible}','CombController@update')->name('combustible.comb.update');



Route::resource('seguridad/usuario','UsuarioController');
Route::match(['PUT','PATCH'],'seguridad/usuario/{id}','UsuarioController@update')->name('seguridad.usuario.update');

Route::resource('seguridad/piloto','PilotoController');
Route::match(['PUT','PATCH'],'seguridad/piloto/{idPiloto}','PilotoController@update')->name('seguridad.piloto.update');

Route::auth();

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});


//Ubicaciones

Route::resource('ubicacion/destino','DestinoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
