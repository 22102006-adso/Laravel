<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ProductoController::class, 'index' ])->name('home');
Route::post('/home/add', [ProductoController::class, 'createProducto'])->name('add_producto');
Route::get('/home/edit/{id}', [ProductoController::class, 'updateProducto'])->name('editar_producto');
Route::get('/home/delete/{id}', [ProductoController::class, 'deleteProducto'])->name('delete_producto');

Route::get('proveedor', [ProveedorController::class, 'index'])->name('proveedor');
Route::post('/proveedor/add', [ProveedorController::class, 'createProveedor'])->name('add_proveedor');
Route::get('/proveedor/edit/{id}', [ProveedorController::class, 'updateProveedor'])->name('editar_proveedor');
Route::get('/proveedor/delete/{id}', [ProveedorController::class, 'deleteProveedor'])->name('delete_proveedor');

Route::get('categoria', [CategoriaController::class, 'index'])->name('categoria');
Route::post('/categoria/add', [CategoriaController::class, 'createCategoria'])->name('add_categoria');
Route::get('/categoria/edit/{id}', [CategoriaController::class, 'updateCategoria'])->name('editar_categoria');
Route::get('/categoria/delete/{id}', [CategoriaController::class, 'deleteCategoria'])->name('delete_categoria');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
