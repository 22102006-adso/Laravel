<?php

namespace App\services;
use App\Http\Controllers;
use App\Models\Producto;

class ProductoService{
    public function getProveedor(){
        $proveedor = Producto::all();
        return $proveedor;
    }
}
?>