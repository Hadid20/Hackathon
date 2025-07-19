<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Qr', [TestController::class, 'index'])->name('qr-sample');

