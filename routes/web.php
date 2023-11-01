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

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('register');
});


// LANDING
Route::get('/', function () {
    return view('landing.indexlanding');
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