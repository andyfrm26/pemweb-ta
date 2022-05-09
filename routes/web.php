<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        'title' => 'faq'
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'home'
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'title' => 'login'
    ]);
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/sign-up', [AuthController::class, 'register'])->name('register');

Route::get('/sign-up', function () {
    return view('sign-up', [
        'title' => 'sign-up'
    ]);
});

Route::get('/cart', function () {
    return view('cart', [
        'title' => 'cart'
    ]);
});

Route::get('/my-store', function () {
    return view('my-store', [
        'title' => 'my-store'
    ]);
});

Route::get('/help', function () {
    return view('help', [
        'title' => 'help'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'profile'
    ]);
});

Route::get('/order', function () {
    return view('order', [
        'title' => 'order'
    ]);
});

Route::get('/history', function () {
    return view('history', [
        'title' => 'history'
    ]);
});

Route::get('/wishlist', function () {
    return view('wishlist', [
        'title' => 'wishlist'
    ]);
});

Route::get('/product', function () {
    return view('product', [
        'title' => 'product',
        'namaBuah' => 'Alpukat Mentega',
        'hargaBuah' => 6000,
        'terjual' => 56,
        'rating' => 4,
        'detailBuah' => 'Sayang banget alpukat mentega ini suka dihindari karena kulitnya tidak mulus,berbercak, dan ukurannya yang lebih kecil dibanding yang lainnya. Padahal sama-sama manis dan lezat!'
    ]);
});