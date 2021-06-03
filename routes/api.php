<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



/**
 * Gerando um qrcode a partir da url passada no formdata
 */
Route::post('qr-code', function (Request $request) {
    
    $request->validate(['url' => 'required|url|max:2000']);

    $file = QRCode::url($request->url)->svg();
    
    return $file;
});