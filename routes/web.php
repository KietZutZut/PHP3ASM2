<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [NewsController::class, 'index'])->name('home'); 
Route::get('/xemnhieu', [NewsController::class, 'xemNhieu'])->name('xemnhieu');
Route::get('/tinmoi', [NewsController::class, 'tinMoi'])->name('tinmoi');
Route::get('/tintrongloai/{id}', [NewsController::class, 'tinTrongLoai'])->name('tintrongloai');
Route::get('/tin/{id}', [NewsController::class, 'chiTietTin'])->name('tin');
