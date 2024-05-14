<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class UsuariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $actiu = $request->input('actiuBuscar');

        if ($actiu == 'actiu') {
            // $usuaris = Usuari::where('actiu', '=', true)
            //     ->get();
            $usuaris = Usuari::where('actiu', '=', true)
                ->paginate(5)
                ->withQueryString();
        } else {
            // $usuaris = Usuari::all();
            $usuaris = Usuari::paginate(5);
        }

        $request->session()->flashInput($request->input());

        return view('usuaris.usuaris', compact('usuaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuaris.newUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuari = new Usuari();

        $usuari->nom = $request->input('nameUser');
        $usuari->cognom = $request->input('cognomUser');
        $usuari->nom_usuari = $request->input('acronimUser');
        $usuari->correu = $request->input('emailUser');
        $usuari->contrasenya = $request->input('passwUser');
        $usuari->correu = $request->input('emailUser');

        $tipoUsuari = $request->input('inlineRadioOptions');
        $usuari->tipus_usuaris_id = $tipoUsuari;

        $usuari->actiu = ($request->input('actiu') == 'actiu');

        $usuari->save();

        return redirect()->action([UsuariController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuari $usuari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuari $usuari)
    {
        return view('usuaris.editUser', compact('usuari'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuari $usuari)
    {
        $usuari->nom = $request->input('nameUser');
        $usuari->cognom = $request->input('cognomUser');
        $usuari->nom_usuari = $request->input('acronimUser');
        $usuari->correu = $request->input('emailUser');
        $usuari->contrasenya = $request->input('passwUser');
        $usuari->correu = $request->input('emailUser');

        $tipoUsuari = $request->input('inlineRadioOptions');
        $usuari->tipus_usuaris_id = $tipoUsuari;

        $usuari->actiu = ($request->input('actiu') == 'actiu');

        $usuari->save();

        return redirect()->action([UsuariController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuari $usuari)
    {
        $usuari->delete();

        return redirect()->action([UsuariController::class, 'index']);
    }
}
