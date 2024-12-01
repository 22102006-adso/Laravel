<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\services\ProductoService;
use App\services\CategoriaService;
use App\services\ProveedorService;

class ProductoController extends Controller
{
    public function index(Request $request){
        $ProductoServices = new ProductoService();   
        $products = $ProductoServices->all();
        return view('productos.index', compact('products'));  
    }

    public function getproductos(Request $request, ProductoService $producto,
    CategoriaService $categoriaService, ProveedorService $ProveedorService){
        $products = $producto->getProductos();
        $categorias = $categoriaService->getCategorias();  
        $proveedores = $ProveedorService->getProveedores();  
    
        return view('home', compact('products', 'categorias', 'proveedores'));
    }

    public function createProducto(Request $request){
        $productoData = $request->validate([
            'nombre' => 'required|unique:productos|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
            'id_categoria' => 'required|numeric',
            'id_proveedor' => 'required|numeric'
        ]);

        Producto::create($productoData);
    }

    public function updateProducto(Request $request, $id){
        $productoData = $request->validate([
            'nombre' => 'required|unique:productos|max:255',
            'precio' => 'required|numeric',
            'stock' => 'required|numeric',
            'id_categoria' => 'required|numeric',
            'id_proveedor' => 'required|numeric'
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($productoData);
    }

    public function deleteProducto($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();
    }
}
