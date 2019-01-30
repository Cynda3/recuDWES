<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juego;
use App\Consola;
use App\Genero;

class juegosController extends Controller
{



    function anadir(Request $request){

      $juego = new Juego;
      $consola = new Consola;
      $genero = new Genero;
      $juego->name = $request->input('name');
      $consola->id = $request-> consola;
      $genero->id = $request-> genero;
      $juego->save();
      $consola->save();
      $genero->save();
      return view('Welcome');
    }

    function mostrar(){
      $generos = Genero::all();
      $consolas = Consola::all();

      return view('welcome')->with(['generos' => $generos, 'consolas' => $consolas]);
    }

}
