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
<<<<<<< HEAD


Route::get('/registerz', function (){

    return view('home/register');
});
Route::post('/registerz','RegisterLoginController@registerc');

Route::get('/logingz', 'RegisterLoginController@index');


// Route::post('/login', 'RegisterLoginController@login');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/ตะกร้าสินค้า', function(){
    return view('cart.cart');
});
>>>>>>> 28342b4ef271d7912afc3127963c7cf63f6983a0
