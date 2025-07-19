<?php

use App\Http\Controllers\AbesController;
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
