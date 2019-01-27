<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ps4;
use App\Nintendo;

class juegosController extends Controller
{



    function anadirPs4(Request $request){

      $ps4 = new Ps4;
      $ps4->name = $request->input('name');
      $ps4->genero = $request->input('genero');
      $ps4->save();
      return view('Welcome');
    }

    function anadirNintedo(Request $request){

      $nintendo = new Nintendo;
      $nintendo->name = $request->input('name');
      $nintendo->genero = $request->input('genero');
      $nintendo->save();
      return view('Welcome');
    }
}
