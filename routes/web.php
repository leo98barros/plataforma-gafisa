<?php

use Illuminate\Support\Facades\Route;
use LaravelQRCode\Facades\QRCode;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('qr-code', function () {
    
    $file = QRCode::text('QR Code Generator for Laravel!')->svg();    
    // $file = QRCode::url('https://laravel-news.com/one-of-many-eloquent-relationship?utm_medium=email&utm_campaign=Laravel%20News%20Daily%202021-05-18&utm_content=Laravel%20News%20Daily%202021-05-18+CID_3a61fb021ef737d761c1feb9d1451768&utm_source=email%20marketing&utm_term=One%20of%20Many%20Eloquent%20Relationship%20Added%20to%20Laravel')->png();
    return $file;
    

    // dd('po');

    // return response($file)->header('Content-type', 'image/png');

    // return QRCode::text('QR Code Generator for Laravel!')->png();    
});
