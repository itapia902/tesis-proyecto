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

/*RUTA PRINCIPAL */

//Route::get('/','Controller@index')->name('ingresarUsuario_CRUD');

Route::get('/',function (){

        return view ('welcome1');
});

/*CRUD Usuarios */
Route::post('/CrudIngresarUsuario','UsuarioController@store')->name('CrudIngresarUsuario');
/*CRUD Productos */
Route::post('/CrudIngresarProducto','ProductoController@store')->name('CrudIngresarProducto');


/*VISTAS PRODUCTOS */
Route::get('/VistaIngresarProducto','ProductoController@create')->name('VistaIngresarProducto'); //Vista
Route::get('/VistaVerProducto','ProductoController@index')->name('VistaIngresarProducto'); //Vista

Route::get('/','ProductoController@index')->name('VistaVerProducto'); //Vista

/*VISTA VISTAS USUARIOS */
Route::get('/VistaIngresarUsuario','UsuarioController@index')->name('VistaIngresarUsuario'); //Vista
Route::get('/VistaVerUsuario','UsuarioController@create')->name('VistaVerUsuario'); //Vista


//Route::get('/ingresarUsuario','UsuarioController@index')->name('ingresarUsuario'); //Retorna una vista
//Route::get('/verUsuario','UsuarioController@create')->name('verUsuario'); //Retorna una vista

/*Acerca de nosotros vista */
Route::get('/acercade',function(){

return view ('acercaDeNosotros');
});

/*Carrito de compras */
Route::get('/carritoCompras',function(){

        return view ('carritoCompras');
        });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

