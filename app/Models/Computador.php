<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    protected $fillable = [
        'nombre', 'marca', 'modelo', 'serie', 'color',
    ];


    protected $hidden =[
        'created_at', 'updated_at',
    ];


    public function computadors(){
        return $this->belongsTo('App\Models\Formularios');
    }
}
