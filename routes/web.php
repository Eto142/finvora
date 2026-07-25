<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DepositController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/education', function () {
    return view('home.education');
});

Route::get('/cryptocurrencies', function () {
    return view('home.cryptocurrencies');
});

Route::get('/forex', function () {
    return view('home.forex');
});

Route::get('/shares', function () {
    return view('home.shares');
});

Route::get('/indices', function () {
    return view('home.indices');
});

Route::get('/etfs', function () {
    return view('home.etfs');
});



Route::get('/trade', function () {
    return view('home.trade');
});

Route::get('/copy-trading', function () {
    return view('home.copy-trading');
});

Route::get('/automated-trading', function () {
    return view('home.automated-trading');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/why-us', function () {
    return view('home.why-us');
});

Route::get('/faq', function () {
    return view('home.faq');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/terms-and-conditions', function () {
    return view('home.terms-and-conditions');
});

Route::get('/privacy-policy', function () {
    return view('home.privacy-policy');
});



//AUTHENTICATION ROUTES

Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.user');

    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.store');
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

//USER ROUTES

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/deposit', [DepositController::class, 'index'])->middleware('auth')->name('user.deposit');
