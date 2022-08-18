<?php

use App\Http\Controllers\DaoController;
use App\Http\Controllers\DaoipfsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeCotnroller;
use App\Http\Controllers\IpfsController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Middleware\CheckPlan;
use Illuminate\Support\Facades\Route;

Route::get('/x', function () {
    return view('auth.update');
});
Route::get('#', function () {
})->name('#');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login_form', function () {
    return view('auth.login');
})->name('login_form');

Route::get('/register_form', function () {
    return view('auth.register');
})->name('register_form');

Route::get('/plan', function () {
    return view('auth.plan');
})->name('plan');

Route::auto('/dao/letter', LetterController::class);

Route::controller(UserController::class)->group(function () {
    Route::get('/register_store', 'register_store')->name('register_store');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/upgrade', 'upgrade')->name('upgrade');
    Route::any('/user_update', 'user_update')->name('user_update');
    Route::any('/check_exist_by_mail', 'check_exist_by_mail')->name('check_exist_by_mail');
    Route::any('/send_mail_to_user', 'send_mail_to_user')->name('send_mail_to_user');
    Route::any('/create_empty_mail_user', 'create_empty_mail_user')->name('create_empty_mail_user');
    Route::any('/sync_email', 'sync_email')->name('sync_email');
    Route::any('/sync_update', 'sync_update')->name('sync_update');
    Route::any('/accept_join_dao', 'accept_join_dao')->name('accept_join_dao');
    Route::any('/refuse_join_dao', 'refuse_join_dao')->name('refuse_join_dao');
});





Route::controller(HomeCotnroller::class)->group(function () {
    Route::get('/', 'start')->name('start')->middleware(['auth']);
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/terms', 'terms')->name('terms');
});

Route::controller(WalletController::class)->group(function () {
    Route::get('/update_user_wallet', 'update_user_wallet')->name('update_user_wallet')->middleware(['auth']);
});

Route::controller(DaoController::class)->group(function () {
    Route::any('/discover_dao', 'discover_dao')->name('discover_dao')->middleware(['auth']);
    Route::any('/create_dao', 'create_dao')->name('create_dao')->middleware(['auth']);
    Route::any('/store_dao', 'store_dao')->name('store_dao')->middleware(['auth']);
    Route::any('/show_dao', 'show_dao')->name('show_dao')->middleware(['auth']);
    Route::any('/reform_dao', 'reform_dao')->name('reform_dao')->middleware(['auth']);
    Route::any('/daodesign_generator', 'daodesign_generator')->name('daodesign_generator')->middleware(['auth']);
    Route::any('/change_dao_minted_status', 'change_dao_minted_status')->name('change_dao_minted_status')->middleware(['auth']);
});

Route::controller(DaoipfsController::class)->group(function () {

    Route::any('/dao_ipfs_create', 'dao_ipfs_create')->name('dao_ipfs_create')->middleware(['auth']);
    Route::any('/find_dao_ipfs_by_token', 'find_dao_ipfs_by_token')->name('find_dao_ipfs_by_token')->middleware(['auth']);
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard_personal', 'dashboard_personal')->name('dashboard_personal');
    Route::get('/dashboard_account', 'dashboard_account')->name('dashboard_account');
    Route::get('/dashboard_address', 'dashboard_address')->name('dashboard_address');
    Route::get('/dashboard_upgrade', 'dashboard_upgrade')->name('dashboard_upgrade');
    Route::get('/dashboard_social', 'dashboard_social')->name('dashboard_social');
    Route::get('/dashboard_request', 'dashboard_request')->name('dashboard_request');
    Route::get('/dashboard_daos', 'dashboard_daos')->name('dashboard_daos');
});

Route::controller(IpfsController::class)->group(function () {
    Route::any('/ipfs_create', 'ipfs_create')->name('ipfs_create');
    Route::any('/ipfs_last_get', 'ipfs_last_get')->name('ipfs_last_get');
});
