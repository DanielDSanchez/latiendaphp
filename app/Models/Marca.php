<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    //realacion con productos 1-m
    public function productos(){
        //retorna los productos de la marca 
        return $this->hasMany(Producto::class);
    }
}