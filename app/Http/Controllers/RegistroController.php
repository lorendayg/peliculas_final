<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function create()
    {
        return view('registro');
    }

   public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'usuario' => 'required|unique:users,usuario|max:255',
            'password' => [
            'required',
            'confirmed',
            'min:8',
            'regex:/[A-Z]/',      // al menos una letra mayúscula
            'regex:/[a-z]/',      // al menos una letra minúscula
            'regex:/[0-9]/',      // al menos un número
            'regex:/[@$!%*?&.]/'   // al menos un carácter especial (sin ] al final)
             ],
        ]);
        User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'usuario' => $request->usuario,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso. Puedes iniciar sesión.');
    }

}

