<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Recu DWES</title>
    </head>
    <body>
      <h1 style="color: #32ff62">{{$juego->name}}</h1>
      <p>Consola: {{$juego->consola->name}}</p>
      <p>Genero: {{$juego->genero->name}}</p>
    </body>
</html>