<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', function () {
        return view('admin.index');
    })->name('home')->middleware('can:dashboard');

    Route::get('akun', function () {
        return view('admin.profile');
    })->name('akun');

    Route::get('pengaturan', function () {
        return view('admin.settings');
    })->name('pengaturan');

    Route::resource('pengguna', UserController::class);
});
