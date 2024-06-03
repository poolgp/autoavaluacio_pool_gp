<?php

namespace App\Http\Controllers;

use App\Clases\Utilitat;
use App\Models\Usuari;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class UsuariController extends Controller
{

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $nom_usuari = $request->input('nom_usuari');
        $contrasenya = $request->input('contrasenya');

        $user = Usuari::where('nom_usuari', $nom_usuari)->first();

        if ($user != null && Hash::check($contrasenya, $user->contrasenya)) {
            Auth::login($user);
            $response = redirect('/home');
        } else {
            $request->session()->flash('error', 'Usuari o contrasenya incorrectes');
            $response = redirect('/loginForm')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

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
        $usuari->contrasenya = \bcrypt($request->input('passwUser'));
        $usuari->correu = $request->input('emailUser');

        $tipoUsuari = $request->input('inlineRadioOptions');
        $usuari->tipus_usuaris_id = $tipoUsuari;

        $usuari->actiu = ($request->input('actiu') == 'actiu');

        try {
            $usuari->save();
            $response = redirect()->action([UsuariController::class, 'index']);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $mensaje);
            $response = redirect()->action([UsuariController::class, 'create'])->withInput();
        }

        return $response;
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
    public function edit(Request $request, Usuari $usuari)
    {
        $tipoDeModificacion = $request->tipoDeModificacion;
        if ($tipoDeModificacion === "cambioDeContrasenia") {
            return view('usuaris.editPassw', compact('usuari'));
        } else {
            return view('usuaris.editUser', compact('usuari'));
        }
        // return view('usuaris.editPassw', compact('usuari'));
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
        try {
            $usuari->delete();
            return redirect()->action([UsuariController::class, 'index'])->with('success', 'Usuario eliminado exitosamente.');
        } catch (QueryException $e) {
            $usuari->actiu = 2;
            $usuari->save();

            $mensaje = Utilitat::errorMessage($e);
            return redirect()->action([UsuariController::class, 'index'])->with('success', 'No se puede eliminar, tiene datos relacionados, se pasa a INACTIVO');
        }
    }
}
