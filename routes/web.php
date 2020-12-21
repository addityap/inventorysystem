<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class,'postLogin'])->name('postlogin');


Route::group(['middleware' => ['auth','ceklevel:admin,pengguna']], function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::get('/logout', [LoginController::class,'logout'])->name('logout');
});
Route::group(['middleware' => ['auth','ceklevel:pengguna']], function () {

});

