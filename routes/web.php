<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', function () {
    return view('auth.login');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login')->name('login');
});

Route::get('/', [LandingPageController::class, 'index'])->name('landing.dashboard');

Route::get('/cart/{catalogue}', [CartController::class, 'create'])->name('cart.create');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');

Route::get('/about', function () {
    return view('landing.about');
});

Route::get('/contact', function () {
    return view('landing.contact');

});

// harus login dulu baru bisa melakukan aksi di bawah
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::resource('catalogues', CatalogueController::class);
    Route::resource('orders', OrderController::class);
    Route::put('/orders/{id}/status', [OrderController::class, 'changeStatus'])->name('orders.changeStatus');
    Route::get('profile', [SettingController::class, 'index'])->name('profile.index');
    Route::get('profile/edit', [SettingController::class, 'edit'])->name('profile.edit');
    Route::post('profile', [SettingController::class, 'update'])->name('profile.update');
});
