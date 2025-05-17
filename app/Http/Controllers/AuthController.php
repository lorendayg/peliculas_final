<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
        // Validación de los campos en POST
        $credentials = $request->validate([
            'usuario' => ['required'],
            'password' => ['required'],
        ]);

        // Intento de login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Previene sesión hijacking
            return redirect()->intended('/peliculas');
        }

        return back()->withErrors([
            'usuario' => 'Las credenciales no coinciden.',
        ])->onlyInput('usuario');
    }

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

