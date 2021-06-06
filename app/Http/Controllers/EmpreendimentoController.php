<?php

namespace App\Http\Controllers;

use Validator;

use App\Models\Empreendimento;
use Illuminate\Http\Request;

class EmpreendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request) : \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'locale' => 'required|exists:id,localidades'
        ], [
            'locale.required' => 'O campo url é obrigatório',
            'locale.exists' => 'A localidade indicada não existe em nosso banco de dados',
        ]);

        

        return responder()->success()->respond();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) : \Illuminate\Http\JsonResponse
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empreendimento  $empreendimento
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Empreendimento $empreendimento) : \Illuminate\Http\JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empreendimento  $empreendimento
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Empreendimento $empreendimento) : \Illuminate\Http\JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empreendimento  $empreendimento
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Empreendimento $empreendimento) : \Illuminate\Http\JsonResponse
    {
        //
    }
}
