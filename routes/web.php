<?php
use Illuminate\Support\Facades\Cookie;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*///////..///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/', 'HomeController@ViewHome')->name('home');

Route::get('/shop/{category}', 'ShopController@ViewCategory')->name('shop');

Route::get('/product/{id}', 'SingleProductController@Render')->name('product');

Route::get('/checkout', 'CheckoutController@MiddleCheck')->name('checkout'); 

Route::get('/search/{name}', function ($name) {
    return $name;
})->name('search');

Route::get('/cart', 'CartController@Render')->name('cart');

Route::get('/contact', function() {
    return Cookie::get('cart');
})->name('contact');

Route::get('/about', function() {
    return view('master');
})->name('about');


Route::get('/rss', 'RSSController@RenderView')->name('rss-view');

Route::get('/privacy-policy', function () {
    return view('policy');
});
