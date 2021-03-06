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

Route::get('/', 'MainController@home');
Route::get('/catalogo', 'CatagoloController@home');
Route::get('/contacto', 'ContactoController@home');
Route::get('/nosotros', 'NosotrosController@home');
Route::get('/carrito','ShoppingCartsController@index');
Route::post('/carrito','ShoppingCartsController@checkout');
Route::post('/subtotal','InShoppingCartsController@edit');
Route::put('in_shopping_carts/{id}','InShoppingCartsController@update');
Route::post('/AgregarCarrito','InShoppingCartsController@store');

Route::get('/payments/store','PaymentsController@store');

Route::delete('in_shopping_carts/{id}','InShoppingCartsController@destroy');

Auth::routes();

Route::resource('products','ProductsController');

Route::resource('in_shopping_carts','InShoppingCartsController', ['only' => ['store','destroy']
	]);

Route::resource('compras','ShoppingCartsController',['only'=>['show']]);

Route::resource('orders','OrdersController',['only'=>['index','update']]);


Route::get('/home', 'HomeController@index');

Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));

Route::get('products/images/{filename}',function($filename){
	$path=storage_path("app/images/$filename");

	if (!\File::exists($path)) abort(404);

	$file = \File::get($path);
	$type = \File::mimeType($path);
	$response = Response::make($file,200);

	$response->header("Content-Type",$type);
	return $response;
	
});