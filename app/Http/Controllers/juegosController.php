<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juego;
use App\Consola;
use App\Genero;

class juegosController extends Controller
{



    function anadir(Request $request){
      $generos = Genero::all();
      $consolas = Consola::all();


      $juego = new Juego;
      $juego->name = $request->input('name');
      $juego->consola_id = $request-> consola;
      $juego->genero_id = $request-> genero;
      $juego->save();
      return view('welcome')->with(['generos' => $generos, 'consolas' => $consolas]);
    }

    function mostrar(){
      $generos = Genero::all();
      $consolas = Consola::all();

      return view('welcome')->with(['generos' => $generos, 'consolas' => $consolas]);
    }

    function listar(){
      $juegos = Juego::all();
      $juegosAccion = Juego::where('genero_id', 1)
      ->orderBy('name','asc')
        ->get();


      $juegosAventura = Juego::where('genero_id', 2)
      ->orderBy('name','asc')
        ->get();


      $juegosFiccion = Juego::where('genero_id', 3)
      ->orderBy('name','asc')
        ->get();


      $numJuegos = count($juegos);
      return view('lista')->with([
        'juegosAccion' => $juegosAccion,
        'juegosAventura' => $juegosAventura,
        'juegosFiccion' => $juegosFiccion,
        'numJuegos' => $numJuegos
      ]);
    }


    function mostrarJuego($id){
      $juego = Juego::find($id);
  

      return view('juego')->with([
        'juego' => $juego
      ]);

    }

}
