<?php

namespace App\Http\Controllers;

use App\Clases\Utilitat;
use App\Models\Usuari;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $request->session()->flash('error', 'Usuario o contraseña incorrectos');
            $response = redirect('/login')->withInput();
        }
        return $response;
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

        try {
            $usuari->save();
            $request->session()->flash('mensaje', 'Usuario creado correctamente.');
            $response = redirect()->action([UsuariController::class, 'index']);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $mensaje);
            $response = redirect()->action([UsuariController::class, 'create'])->withInput();
        }
        return $response;
    }

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

        try {
            $usuari->save();
            $request->session()->flash('mensaje', 'Usuario actualizado correctamente.');
            $response = redirect()->action([UsuariController::class, 'index']);
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $mensaje);
            $response = redirect()->action([UsuariController::class, 'edit'], ['usuari' => $usuari->id])->withInput();
        }
        return $response;
    }

    public function destroy(Request $request, Usuari $usuari)
    {
        try {
            $usuari->delete();
            $request->session()->flash('mensaje', 'Usuario eliminado correctamente.');
        } catch (QueryException $ex) {
            $usuari->actiu = 0;
            $usuari->save();

            $mensaje = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $mensaje);
        }
        return redirect()->action([UsuariController::class, 'index']);
    }
}
