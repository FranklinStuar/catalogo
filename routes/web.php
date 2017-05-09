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
    return view('welcome')->with("products",\App\Models\Product::all());
});
Route::get('/catalogo', function () {
    return view('catalogo')->with("products",\App\Models\Product::all());
});
Route::get('/producto/{product_id}', function ($product_id) {
    return view('product')->with("product",\App\Models\Product::find($product_id));
});

Route::get('register', 'UserController@create');
Route::post('register', 'UserController@store');

Route::get('/login', 'LogController@login')->name('login');
Route::post('login', 'LogController@store');
Route::get('logout', 'LogController@logout');

Route::get('shopping', 'ShoppingController@show');
Route::get('shopping/add', 'ShoppingController@add');
Route::get('shopping/remove', 'ShoppingController@remove');
Route::post('shopping/{product_id}/cambiar-cantidad', 'ShoppingController@cambiar_cantidad');


Route::resource('user', 'UserController');
Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
	Route::get('/', 'AdminController@index');
	Route::resource('/gama', 'GamasController');
	Route::get('/gama/{id}/lineas', 'GamasController@lineas');
	Route::get('/gama/{id}/productos', 'GamasController@productos');
	Route::resource('/lineas', 'LineasController');
	Route::get('/lineas/{id}/productos', 'LineasController@productos');
	Route::resource('/normas', 'NormasController');
	Route::resource('/productos', 'ProductsController');
	Route::resource('/clientes', 'ClientesController');
});
