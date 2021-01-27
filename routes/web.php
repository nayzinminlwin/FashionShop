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

/*
Route::get('/onlineShop', function () {
    return view('index');
});
*/
Route::get('/onlineShop','GgIndex\GgIndexController@index');

Route::get('/onlineShop/category', function () {
    return view('category');
});

Route::get('/onlineShop/blog', function () {
    return view('blog');
});

Route::get('/onlineShop/contact', 'Reviews\ReviewsController@index');
Route::post('/onlineShop/contact','Reviews\ReviewsController@addReview');

Route::get('/onlineShop/reviews', 'Reviews\ReviewsController@reviewIndex');

Route::get('/onlineShop/category/tops','Tops\TopsController@index' );
Route::get('/onlineShop/category/top/detail/{id}','Tops\TopsController@detail' );

Route::get('/onlineShop/category/acessories','Acessories\AcessoriesController@index' );
Route::get('/onlineShop/category/acessory/detail/{id}','Acessories\AcessoriesController@detail');

Route::get('/onlineShop/category/bkks','Bkk\BkkController@index' );
Route::get('/onlineShop/category/bkk/detail/{id}','Bkk\BkkController@detail' );

Route::get('/onlineShop/category/bottoms','Bottom\BottomController@index' );
Route::get('/onlineShop/category/bottom/detail/{id}','Bottom\BottomController@detail' );

Route::get('/onlineShop/category/cosmetics','Cosmetics\CosmeticsController@index' );
Route::get('/onlineShop/category/cosmetic/detail/{id}','Cosmetics\CosmeticsController@detail' );

Route::get('/onlineShop/category/dresses','Dress\DressController@index' );
Route::get('/onlineShop/category/dress/detail/{id}','Dress\DressController@detail' );

Route::get('/onlineShop/category/foods','Food\FoodController@index' );
Route::get('/onlineShop/category/food/detail/{id}','Food\FoodController@detail' );

Route::get('/onlineShop/category/shoes','Shoes\ShoesController@index' );
Route::get('/onlineShop/category/shoe/detail/{id}','Shoes\ShoesController@detail' );

//Route::get('/onlineShop/addToCart/{id}','')



Route::get('/onlineShop/cart','Cart\CartController@showCart');

Route::get('/onlineShop/addToCart/{catID}/{id}','Cart\CartController@addItemToCart');

Route::get('/onlineShop/cart/delete','Cart\CartController@delete');
Route::get('/onlineShop/cart/soloDelete/{id}','Cart\CartController@soloDelete');

Route::get('/onlineShop/cart/confirm/from','Cart\CartController@customerConfirm');
Route::post('/onlineShop/cart/confirm/from','Cart\CartController@dataInsert');

Route::get('/onlineShop/cart/confirm/finished','Cart\CartController@done');



//Route::get('/',function(){

//})
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/onlineShop/AdminHeHee','Admin\AdminController@index');

Route::get('/onlineShop/Admin/Add','Admin\AdminController@add');
Route::post('/onlineShop/Admin/Add','Admin\AdminController@create');

Route::get('/onlineShop/Admin/Edit','Admin\AdminController@editIndex');
Route::get('/onlineShop/Admin/Edit/{catID}/{id}','Admin\AdminController@edit');
Route::post('/onlineShop/Admin/Edit/{catID}/{id}','Admin\AdminController@change');

Route::get('/onlineShop/Admin/Delete','Admin\AdminController@deleteIndex');
Route::get('/onlineShop/Admin/Delete/{catID}/{id}','Admin\AdminController@delete');

Route::get('/onlineShop/Admin/Reviews','Admin\AdminController@reviewIndex');
Route::get('/onlineShop/Admin/UploadReviews/{id}','Admin\AdminController@uploadReviews');

Route::get('/onlineShop/Admin/Orders','Admin\AdminController@order');
Route::get('/onlineShop/Admin/OrderHistory','Admin\AdminController@orderHistory');

Route::get('/onlineShop/Admin/MarkDelivered/{userID}','Admin\AdminController@markAsDelivered');
Route::get('/onlineShop/Admin/UndoDelivered/{userID}','Admin\AdminController@undoDelivered');

