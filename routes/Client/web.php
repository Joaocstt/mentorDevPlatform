<?php

use App\Http\Controllers\Student\Authentication\LoginController;
use App\Http\Controllers\Student\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'checkAuth'])->name('check-auth');

Route::group(['as' => 'client.', 'prefix' => 'arena'],function() {
    Route::get('/', [LoginController::class, 'checkAuth'])->name('check-auth');

    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login/do', [LoginController::class, 'loginDo'])->name('login.do')->middleware('throttle:5,1');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });

});
