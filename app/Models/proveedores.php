<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $fillable = ['nombre', 'direccion', 'telefono', 'email', 'contacto', 'descripion'];
}
