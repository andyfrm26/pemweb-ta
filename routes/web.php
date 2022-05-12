<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
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

Route::get('/login', function () {
    return view('login', [
        'title' => 'login'
    ]);
})->name('login');;

Route::post('/login', [AuthController::class, 'login'])->name('loginCheck');
Route::post('/sign-up', [AuthController::class, 'register'])->name('register');

Route::get('/sign-up', function () {
    return view('sign-up', [
        'title' => 'sign-up'
    ]);
});

Route::prefix('imperfect')->middleware('auth')->group(function () { 
    Route::get('/home', [ProdukController::class, 'indexHomepage']);
    Route::get('/cart', [ProdukController::class, 'indexCart']);
    Route::get('/wishlist', [ProdukController::class, 'indexWishlist']);
    Route::get('/add-wishlist/{id}', [ProdukController::class, 'addWishlist']);
    Route::get('/add-cart/{id}', [ProdukController::class, 'addCart']);
    Route::get('/review', [ProdukController::class, 'review']);

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

    Route::get('/review', function () {
        return view('review', [
            'title' => 'review'
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
});
