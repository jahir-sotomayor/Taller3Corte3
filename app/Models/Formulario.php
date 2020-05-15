<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable = [
        'cedula', 'nombre', 'apellido', 'celular', 'direccion', 'correo',
    ];


    protected $hidden =[
        'created_at', 'updated_at',
    ];


    public function computadors(){
        return $this->hasMany('App\Models\Computador');
    }


}
