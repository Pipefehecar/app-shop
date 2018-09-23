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

Route::get('/','TestController@welcome');

Route::get('/contact','TestController@contact');

Route::get('/prueba',function(){
	return "hola soy una ruta de pruebaa";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/publications/{id}', 'ProductController@show');
// Route::post('/cart', 'CartDetailController@store');
//Route::delete('/cart','CartDetailController@destroy');

//Route::post('/order','CartController@update');



Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function(){
		//CR
		Route::get('/products','ProductController@index'); //listado de productos
		Route::get('/products/create','ProductController@create'); //ver formulario
		Route::post('/products','ProductController@store'); //registrar 
		//UD
		Route::get('/products/{id}/edit','ProductController@edit'); //formulario de edicion
		Route::post('/products/{id}/edit','ProductController@update'); //actualizar 
		Route::delete('/products/{id}','ProductController@destroy'); //formulario de eliminacion

		//IMAGENES
		Route::get('/products/{id}/images','ImageController@index');//listado
		Route::post('/products/{id}/images','ImageController@store'); //registrar 
		Route::delete('/products/{id}/images','ImageController@destroy'); //formulario de eliminacion
		Route::get('/products/{id}/images/select/{image}','ImageController@select');//listado

		// put patch delete

});