<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Auth;
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


Route::controller(AuthController::class)->group( function () {
    Route::get('login', 'loginView')->name('login');
    Route::post('loginPost', 'postLogin')->name('loginPost');
});

// LANDING
Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'landingpage')->name('/');
});

Route::get('/shop', function () {
    return view('landing.shop');
});
Route::get('/about', function () {
    return view('landing.about');
});
Route::get('/features', function () {
    return view('landing.features');
});
Route::get('/contact', function () {
    return view('landing.contact');
});
Route::get('/shopping-cart', function () {
    return view('landing.shopping-cart');
});

// =========================================================================