<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TestController extends Controller
{
    public function index()
    {
        $QR = QrCode::size(200)->generate('https://chatgpt.com/');
        return view('page.semple', compact('QR'));
    }
}
