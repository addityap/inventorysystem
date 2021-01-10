<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class,'postLogin'])->name('postlogin');


Route::group(['middleware' => ['auth','ceklevel:admin,pengguna']], function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::get('/logout', [LoginController::class,'logout'])->name('logout');

});
Route::group(['middleware' => ['auth','ceklevel:pengguna']], function () {
    Route::get('/listdata',[productController::class,'listProduct'])->name('listproduct');
    Route::get('/laporan',[productController::class,'laporan'])->name('laporan');
    Route::post('/storedata',[productController::class,'store'])->name('storedata');
    Route::post('/storelaporan',[LaporanController::class,'store'])->name('storelaporan');

    
}); 

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('/listuser',[UserController::class,'listuser'])->name('listuser');
    Route::get('detailuser/{user:id}',[UserController::class,'show']);
    Route::post('/storeuser',[UserController::class,'store'])->name('storeuser');
    Route::get('/addkategori',[AdminController::class,'create'])->name('addkategori');
    Route::post('/storecate',[AdminController::class,'store'])->name('storecate');
    Route::get('/listdatas',[productController::class,'konfProduct'])->name('konfproduct');
    Route::get('/approved/{id}',[productController::class,'approved']);
    Route::get('/listlaporan',[LaporanController::class,'index'])->name('listlaporan');
    Route::get('cetakdata/{laporan:id}',[LaporanController::class,'show']);


});

