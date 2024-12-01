<?php

namespace App\services;
use App\Http\Controllers;
use App\Models\Proveedores;

class ProductService{
    public function getProveedor(){
        $proveedor = Proveedores::all();
        return $proveedor;
    }
}

?>