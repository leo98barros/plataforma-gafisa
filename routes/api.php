<?php

use App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
Route::prefix('v1')->group(function () {
    Route::apiResource('empreendimentos', Controllers\EmpreendimentoController::class)->only(['index', 'show']);
    Route::apiResource('localidades', Controllers\LocalidadeController::class)->only(['index', 'show']);
});

/**
 * Gerando um qrcode a partir da url passada no formdata
 */
Route::post('qr-code', function (Request $request) /* : \Illuminate\Http\JsonResponse */ {

    $validator = Validator::make($request->all(), [
        'url' => 'required|url|max:1500'
    ], [
        'url.required' => 'O campo url é obrigatório',
        'url.url' => 'O campo url é uma url inválida',
        'url.max' => 'O campo url não pode ser ser maior que 1500 caracteres',
    ]);

    if ($validator->fails()) {
        return responder()
            ->error('form_validation', 'Por favor, cheque seus dados e tente novamente')
            ->data(['fields' => $validator->errors()->toArray()])
            ->respond(422);
    }

    $file =  QRCode::url($request->url)->svg();

    return $file;
});