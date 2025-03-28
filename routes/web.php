<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [NewsController::class, 'index'])->name('home'); 
Route::get('/xemnhieu', [NewsController::class, 'xemNhieu'])->name('xemnhieu');
Route::get('/tinmoi', [NewsController::class, 'tinMoi'])->name('tinmoi');
Route::get('/tintrongloai/{id}', [NewsController::class, 'tinTrongLoai'])->name('tintrongloai');
Route::get('/tin/{id}', [NewsController::class, 'chiTietTin'])->name('tin');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Xác thực email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('dashboard')->with('success', 'Xác thực email thành công!');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/resend', function (Request $request) {
    if ($request->user()->hasVerifiedEmail()) {
        return redirect()->route('dashboard');
    }
    $request->user()->sendEmailVerificationNotification();
    return back()->with('success', 'Đã gửi lại email xác thực!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

// Trang Dashboard (Chỉ cho người đã xác thực email)
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
