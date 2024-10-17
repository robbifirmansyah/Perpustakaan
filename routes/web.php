<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Auth\LoginRegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/buku',[BukuController::class,'index']);

Route::controller(LoginRegisterController::class)->group(function(){
    Route::get('/register','register')->name('register');
    Route::post('/store','store')->name('store');
    Route::get('/login','login')->name('login');
    Route::get('/authenticate','authenticate')->name('authenticate');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/logout','logout')->name('logout');
});
