<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{
    public function getCategoria(){
        $categorias = categoria::all();
        return $categorias;
    }

    public function createCategoria(Request $request){
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

    
        categoria::create($validatedData);
    }

    public function setCategoria(Request $request){
        $categoryData = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required'
        ]);

       
        categoria::where('id', $request->id)->update($categoryData);
    }

    public function deleteCategoria($id){
        categoria::destroy($id);
    }
}