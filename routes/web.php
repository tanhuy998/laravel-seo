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

Route::get('/', 'HomeController@ViewHome')->name('home');

Route::get('/shop/{category}', 'ShopController@ViewCategory')->name('shop');

Route::get('/product/{id}', function() {

})->name('product');

Route::get('/checkout', function () {
    $product = App\Product::find(1);

    return $product->images->first()->path;
})->name('checkout'); 

Route::get('/contact', function() {

})->name('contact');

Route::get('/about', function() {
    return view('master');
})->name('about');

Route::get('/admin', function() {

})->name('admin');
