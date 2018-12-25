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
Route::get('/', 'ProductController@index');


Route::get('/registerz', function (){

    return view('home/register');
});
Route::post('/registerz','RegisterLoginController@registerc');

Route::get('/logingz', 'RegisterLoginController@logingz');


// Route::post('/login', 'RegisterLoginController@login');

Route::get('/logout', 'RegisterLoginController@getSignOut');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ตะกร้าสินค้า', function(){
    return view('cart.cart');
});
<<<<<<< HEAD

Route::get('/สั่งซื้อสินค้า', function(){
    return view('cart.postmail');
});
=======
>>>>>>> master
