<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedores;

class ProveedorController extends Controller
{
    public function index(){
        $proveedores = Proveedores::all();
        return view('proveedores', compact('proveedores'));
    }

    public function getProveedor(Request $request){
        $proveedor = Proveedores::all();
    }


    public function updateProveedor(Request $request){
        $validate = $request->validate([
        'nombre' => 'required|unique:proveedores|max:255',
        'direccion' => 'required|max:10',
        'telefono' => 'required|max:255',
        'email' => 'required|unique:proveedores|max:255',
        'contacto' => 'required|max:255',
        ]);
        Proveedores::where('id', $request->id)->update($validate);
    

    }

    public function deleteProveedor($id){
        Proveedores::destroy($id);

    }

}