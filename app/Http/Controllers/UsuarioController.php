<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'usuario' => 'required|string|max:255|unique:users,usuario',
            'password' => 'required|string|min:6',
        ]);

        // Guardar en la base de datos
        User::create([
            'name' => $request->nombre . ' ' . $request->apellido, // campo 'name'
            'usuario' => $request->usuario,
            'password' => Hash::make($request->password),
        ]);        
        return redirect('/login')->with('success', 'Usuario registrado con éxito');
    }
}

