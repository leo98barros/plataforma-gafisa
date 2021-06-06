<?php

namespace App\Http\Controllers;

use Validator;

use App\Models\Empreendimento;
use App\Models\Localidade;

use Illuminate\Http\Request;

class LocalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() : \Illuminate\Http\JsonResponse 
    {
        $locales = Localidade::select('name', 'uf')->withCount('empreendimentos')->get();

        return responder()->success($locales)->respond();
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
     * @param  \App\Models\Localidade  $localidade
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $localidade) : \Illuminate\Http\JsonResponse
    {   
        // Verificando a existência da localidade
        if (!Localidade::find($localidade)) {
            return responder()->error('not_found', 'Localidade não encontrada')->respond(404);
        }

        // Pegando empreendimentos de determinada localidade e agrupando por status
        // $empreendimentos = Empreendimento::where('localidade_id', $localidade)
        //     ->join('status', 'empreendimentos.status_id', '=', 'status.id')
        //     ->selectRaw('status.id as id, status.name as status, count(*) as empreendimentos_count')
        //     ->groupBy('status.id')
        //     ->get();

        // Pegando empreendimentos de determinada localidade e agrupando por status
        $empreendimentos = Empreendimento::where('localidade_id', $localidade)->get();

        return responder()->success($empreendimentos)->respond();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Localidade  $localidade
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Localidade $localidade) : \Illuminate\Http\JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Localidade  $localidade
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Localidade $localidade) : \Illuminate\Http\JsonResponse
    {
        //
    }
}
