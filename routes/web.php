<?php

use App\Http\Controllers\DaoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeCotnroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login_form', function () {
    return view('auth.login');
})->name('login_form');


Route::get('/register_form', function () {
    return view('auth.register');
})->name('register_form');

Route::controller(UserController::class)->group(function () {
    Route::get('/register_store', 'register_store')->name('register_store');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/upgrade', 'upgrade')->name('upgrade');
});





Route::controller(HomeCotnroller::class)->group(function () {
    Route::get('/', 'start')->name('start')->middleware(['auth']);
});

Route::controller(WalletController::class)->group(function () {
    Route::get('/update_user_wallet', 'update_user_wallet')->name('update_user_wallet')->middleware(['auth']);
});

Route::controller(DaoController::class)->group(function () {
    Route::get('/discover_dao', 'discover_dao')->name('discover_dao')->middleware(['auth']);
    Route::get('/create_dao', 'create_dao')->name('create_dao')->middleware(['auth']);
    Route::get('/store_dao', 'store_dao')->name('store_dao')->middleware(['auth']);
    Route::get('/show_dao', 'show_dao')->name('show_dao')->middleware(['auth']);
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard_personal', 'dashboard_personal')->name('dashboard_personal');
    Route::get('/dashboard_account', 'dashboard_account')->name('dashboard_account');
});
