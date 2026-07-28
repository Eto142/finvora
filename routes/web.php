<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\User\InvestmentController;
use App\Http\Controllers\User\LoanController;
use App\Http\Controllers\User\SignalController;
use App\Http\Controllers\User\TransactionController;
use App\Http\Controllers\User\WithdrawalController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\SecurityController;
use App\Http\Controllers\User\KYCController;
use App\Http\Controllers\User\SupportController;
use App\Http\Controllers\User\ReferralController;
use App\Http\Controllers\User\NFTController;
use App\Http\Controllers\User\PortfolioController;
use App\Http\Controllers\User\TradeController;
use App\Http\Controllers\User\EducationController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\NotificationController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('user.dashboard');
Route::get('/preipo', [DashboardController::class, 'preipo'])->middleware('auth')->name('user.pre-ipo');
Route::get('/stocks', [DashboardController::class, 'stocks'])->middleware('auth')->name('user.stocks');
Route::get('/signals', [SignalController::class, 'signals'])->middleware('auth')->name('user.signals');
Route::get('/signal-plans', [SignalController::class, 'signalplans'])->middleware('auth')->name('user.signal-plans');  
Route::get('/my-subscriptions', [SignalController::class, 'mysubscriptions'])->middleware('auth')->name('user.my-subscriptions');
Route::get('/deposit', [DepositController::class, 'index'])->middleware('auth')->name('user.deposit');
Route::get('/withdrawal', [WithdrawalController::class, 'index'])->middleware('auth')->name('user.withdrawal');
Route::get('/transactions', [TransactionController::class, 'index'])->middleware('auth')->name('user.transactions');
Route::get('/loans', [LoanController::class, 'index'])->middleware('auth')->name('user.loans');
Route::get('/investment-plan', [InvestmentController::class, 'index'])->middleware('auth')->name('user.investment.plan');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('user.profile');
Route::get('/security', [SecurityController::class, 'index'])->middleware('auth')->name('user.security');
Route::get('/kyc', [KYCController::class, 'index'])->middleware('auth')->name('user.kyc');
Route::get('/support', [SupportController::class, 'index'])->middleware('auth')->name('user.support');
Route::get('/referrals', [ReferralController::class, 'index'])->middleware('auth')->name('user.referrals');
Route::get('/nfts', [NFTController::class, 'index'])->middleware('auth')->name('user.nfts');
Route::get('/nft-gallery', [NFTController::class, 'NftGallery'])->middleware('auth')->name('user.nft-gallery');
Route::get('/my-collection', [NFTController::class, 'MyCollection'])->middleware('auth')->name('user.my-collection');
Route::get('/mint-nft', [NFTController::class, 'MintNft'])->middleware('auth')->name('user.mint-nft');
Route::get('/portfolio', [PortfolioController::class, 'index'])->middleware('auth')->name('user.portfolio');
Route::get('/trade', [TradeController::class, 'index'])->middleware('auth')->name('user.trade');
Route::get('/markets', [TradeController::class, 'markets'])->middleware('auth')->name('user.markets');
Route::get('/markets-news', [TradeController::class, 'marketsnews'])->middleware('auth')->name('user.market-news');
Route::get('/copy-trading', [TradeController::class, 'copyTrading'])->middleware('auth')->name('user.copy-trading');
Route::get('/trading-history', [TradeController::class, 'history'])->middleware('auth')->name('user.trading-history');
Route::get('/courses', [EducationController::class, 'index'])->middleware('auth')->name('user.courses');
Route::get('/my-courses', [EducationController::class, 'myCourses'])->middleware('auth')->name('user.my-courses');
Route::get('/news', [NewsController::class, 'index'])->middleware('auth')->name('user.news');
Route::get('/notifications', [NotificationController::class, 'index'])->middleware('auth')->name('user.notifications');
Route::get('/notifications/unread', [NotificationController::class, 'unread'])->middleware('auth')->name('user.notifications.unread');
Route::post('/notifications/read-all', [NotificationController::class, 'readAll'])->middleware('auth')->name('user.notifications.read-all');