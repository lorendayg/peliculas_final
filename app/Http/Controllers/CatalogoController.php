<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

//use AppModelCatalogo;

class CatalogoController extends Controller
{
    //instancia de clase....consulta = new Catalogo();
    //forma alterna...$consulta = Catalogo::all();

    public function inicio() {
        return view('inicio');
    }
    public function login() {
        return view('login');
    }
    public function registro() {
        return view('registro');
    }

    public function listado() {
        $peliculas = Catalogo::all();
        return view('listado_peliculas', compact('peliculas'));
    }

    public function agregar() {
        return view('agregar'
    );
    }

    public function guardar(Request $request) {
        $request->validate([
            'titulo' => ['required'],
            'descripcion' => ['required'],
            'genero' => ['required'],
            'director' => ['required'],
            'fecha_estreno' => ['required'],
        ]);
        Catalogo::create($request->all());
        return redirect()->route('peliculas.index');
    }

    public function editar($id) {
        $pelicula = Catalogo::findOrFail($id);
        return view('editar', compact('pelicula'));
    }

    public function actualizar(Request $request, $id) {
        $pelicula = Catalogo::findOrFail($id);
        $pelicula->update($request->all());
        return redirect()->route('peliculas.index');
    }
    public function eliminar($id)
    {
    $pelicula = Catalogo::findOrFail($id);
    $pelicula->delete();

    return redirect()->route('peliculas.index')->with('success', 'Película eliminada correctamente.');
    }
    





    /*public function editar(Request $request){
    $consulta = catalogo::where ("id_catalogo",$request->$request->id)->first();
    return view("pages.editar",["titulo"=>"Editar pelicula",
    "pelicula"=>$consulta]);
    }*/

    
}

