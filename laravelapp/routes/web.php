<?php

use App\Http\Controllers\AbesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Qr', [TestController::class, 'index'])->name('qr-sample');

Route::get('/test', function () {
    return view('welcome');
});


Route::resource('/admin', AbesController::class);
Route::get('/login', function () {
    return view('user.login');
})->name('loginview');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('user.register');
});
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/user', function () {
    return view('user.index');
})->name('userview');

Route::get('/user/absen', function () {
    return view('user.absen');
});
Route::post('/user/absen', [AuthController::class, 'absen'])->name('userabsen');
