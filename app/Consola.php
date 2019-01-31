<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consola extends Model
{
    
    protected $table = 'consolas';


    public function juego(){
    	return $this->hasOne('App\Juego');
    }
}
