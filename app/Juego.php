<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    
    protected $table = 'juegos';

    public function consola(){
    	return $this->belongsTo('App\Consola');
    }

    public function genero(){
    	return $this->belongsTo('App\Genero');
    }
}
