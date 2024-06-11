<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Resultat_aprenentatge;
use App\Http\Resources\ResultatAprenentatgeResource;

class ResultatAprenentatgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultats = Resultat_aprenentatge::all();
        return ResultatAprenentatgeResource::collection($resultats);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resultat_aprenentatge $resultat_aprenentatge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resultat_aprenentatge $resultat_aprenentatge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resultat_aprenentatge $resultat_aprenentatge)
    {
        //
    }
}
