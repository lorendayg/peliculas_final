<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    // Si ya está autenticado, lo mandamos a /peliculas
    if (Auth::check()) {
        return redirect('/peliculas');
    }

    if ($request->isMethod('post')) {
        // Validación
        $credentials = $request->validate([
            'usuario' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/peliculas');
        }

        return back()->withErrors([
            'usuario' => 'La contraseña o usuario son incorrectos.',
        ])->onlyInput('usuario');
    }

    // Mostrar formulario de login
    return view('login');
}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

