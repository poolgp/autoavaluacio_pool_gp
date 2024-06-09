<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class UsuariController extends Controller
{
    public function index(Request $request)
    {
        $actiu = $request->input('actiuBuscar');

        if ($actiu == 'actiu') {
            $usuaris = Usuari::where('actiu', '=', true)
                ->paginate(10)
                ->withQueryString();
        } else {
            $usuaris = Usuari::paginate(10);
        }

        $request->session()->flashInput($request->input());

        return view('usuaris.index', compact('usuaris'));
    }

    public function create()
    {
        return view('usuaris.nuevoUser');
    }

    public function store(Request $request)
    {
        $usuari = new Usuari();

        $usuari->nom = $request->input('nom');
        $usuari->cognom = $request->input('cognom');
        $usuari->nom_usuari = $request->input('nom_usuari');
        $usuari->correu = $request->input('correu');
        $contrasenya = bcrypt($request->input('contrasenya'));
        $usuari->contrasenya = $contrasenya;
        $usuari->tipus_usuaris_id = $request->input('tipus_usuaris_id');
        $usuari->actiu = $request->input('actiu');
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

    public function edit(Request $request, Usuari $usuari)
    {
        $tipoModificacion = $request->tipoModificacion;
        if ($tipoModificacion === "editarContrasenya") {
            return view('usuaris.editarPassw', compact('usuari'));
        } else {
            return view('usuaris.editarUser', compact('usuari'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuari $usuari)
    {
        $usuari->nom = $request->input('nom');
        $usuari->cognom = $request->input('cognom');
        $usuari->nom_usuari = $request->input('nom_usuari');
        $usuari->correu = $request->input('correu');
        $contrasenya = bcrypt($request->input('contrasenya'));
        $usuari->contrasenya = $contrasenya;
        $usuari->tipus_usuaris_id = $request->input('tipus_usuaris_id');
        $usuari->actiu = $request->input('actiu');
        $usuari->save();

        return redirect()->action([UsuariController::class, 'index']);
    }

    public function destroy(Usuari $usuari)
    {
        $usuari->delete();

        return redirect()->action([UsuariController::class, 'index']);
    }
}
