<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('frontend.user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/cart/{id}', [App\Http\Controllers\pageController::class, 'cart'])->name('cart');
Route::post('/checkout/{id}', [App\Http\Controllers\pageController::class, 'checkout'])->name('checkout');
Route::post('/checkoutall', [App\Http\Controllers\pageController::class, 'checkoutall'])->name('checkoutall');
Route::post('/save', [App\Http\Controllers\pageController::class, 'index'])->name('save');
Route::get('/profile', [App\Http\Controllers\pageController::class, 'index'])->name('profile');
Route::get('/search', [App\Http\Controllers\pageController::class, 'search'])->name('search');
Route::post('/editProfile{id}', [App\Http\Controllers\pageController::class, 'index'])->name('editProfile');


// AJAX Route
Route::get('/search_trx', [App\Http\Controllers\pageController::class, 'search_trx'])->name('search_trx');
Route::get('/count_services', [App\Http\Controllers\pageController::class, 'count_services'])->name('count_services');
Route::get('/last_order', [App\Http\Controllers\pageController::class, 'last_order'])->name('last_order');

//ADMIN
Route::get('/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/adm_services/{id}', [App\Http\Controllers\HomeController::class, 'adm_services'])->name('adm_services');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/upd_profile/{id}', [App\Http\Controllers\HomeController::class, 'upd_profile'])->name('upd_profile');
Route::get('/pendingorder', [App\Http\Controllers\HomeController::class, 'pendingorder'])->name('pendingorder');
Route::get('/upd_status', [App\Http\Controllers\HomeController::class, 'upd_status'])->name('upd_status');
Route::get('/order_hist', [App\Http\Controllers\HomeController::class, 'order_hist'])->name('order_hist');
Route::get('/transaksi', [App\Http\Controllers\HomeController::class, 'transaksi'])->name('transaksi');