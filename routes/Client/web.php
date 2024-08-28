<?php

use App\Http\Controllers\Client\Authentication\LoginController;
use App\Http\Controllers\Client\DashboardController;
use Illuminate\Support\Facades\Route;


Route::group(['as' => 'client.', 'prefix' => 'arena'],function() {
    Route::get('/', [LoginController::class, 'checkAuth'])->name('check-auth');
    
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login/do', [LoginController::class, 'loginDo'])->name('login.do');

    // TODO somente para quem estiver logado
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
});