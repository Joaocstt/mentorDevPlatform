<?php

use App\Http\Controllers\Mentor\Authentication\LoginController;
use App\Http\Controllers\Mentor\Dashboard;
use App\Http\Middleware\VerifyIsMentorAdmin;
use Illuminate\Support\Facades\Route;


Route::group(['as' => 'admin.', 'prefix' => 'admin'],function() {

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', [LoginController::class, 'checkAuth'])->name('check-auth');
        Route::get('/login', [LoginController::class, 'show'])->name('login');
        Route::post('/login/do', [LoginController::class, 'loginDo'])->name('login.do')->middleware('throttle:5,1');
        Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware(VerifyIsMentorAdmin::class);
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    });

});
