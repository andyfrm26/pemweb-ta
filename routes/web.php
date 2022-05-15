<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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
Route::get('/logout', [AuthController::class, 'logout'])->name('loginCheck');
Route::post('/sign-up', [AuthController::class, 'register'])->name('register');

Route::get('/sign-up', function () {
    return view('sign-up', [
        'title' => 'sign-up'
    ]);
});

Route::prefix('imperfect')->middleware('auth')->group(function () { 
    Route::get('/home', [ProdukController::class, 'indexHomepage']);
    Route::get('/home/search', [ProdukController::class, 'indexHomepageByName']);
    Route::get('/cart', [ProdukController::class, 'indexCart']);
    Route::get('/wishlist', [ProdukController::class, 'indexWishlist']);
    Route::get('/add-wishlist/{id}', [ProdukController::class, 'addWishlist']);
    Route::get('/add-cart/{id}', [ProdukController::class, 'addCart']);
    Route::post('/add-cart-with-value/{id}', [ProdukController::class, 'addCartValue']);
    Route::get('/add-cart-wish/{idWish}/{idProduk}', [ProdukController::class, 'addCartWish']);
    Route::post('/add-voucher/{id}', [ProdukController::class, 'addVoucher']);
    Route::post('/add-payment/{id}', [ProdukController::class, 'addPayment']);
    Route::get('/qty-min/{id}', [ProdukController::class, 'decreaseQuantity']);
    Route::get('/qty-plus/{id}', [ProdukController::class, 'increaseQuantity']);
    Route::get('/remove-cart/{id}', [ProdukController::class, 'removeCart']);
    Route::get('/review/{id}', [ProdukController::class, 'indexReview']);
    Route::post('/review/{id}', [ProdukController::class, 'storeReview']);
    Route::get('/order', [ProdukController::class, 'indexOrder']);
    Route::get('/history', [ProdukController::class, 'indexHistory']);
    Route::post('/change-profile', [AuthController::class, 'editProfile']);
    Route::get('/product/{id}', [ProdukController::class, 'indexProduct']);
    Route::get('/my-store', function () {
        return view('my-store', [
            'title' => 'my-store'
        ]);
    });

    Route::get('/success', function () {
        return view('transaction-success', [
            'title' => 'success'
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
    
});
