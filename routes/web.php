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
    return view('home');
});

Route::get('/shop', function() {
    $products = App\Product::All();

    return $products;
});

Route::get('/product/{id}', function() {

});

Route::get('/checkout', function () {

}); 

Route::get('/contact', function() {

});

Route::get('/about', function() {
    return view('master');
});

Route::get('/admin', function() {

});


