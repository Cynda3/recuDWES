<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Recu DWES</title>
    </head>
    <body>
      <h3>Juegos de accion</h3>
      <ul>
        @foreach($juegosAccion as $juegoAccion)
        <li><a href="/juego/{{$juegoAccion->id}}">{{$juegoAccion->name}}</a></li>
        @endforeach
      </ul>


      <h3>Juegos de aventura</h3>
      <ul>
        @foreach($juegosAventura as $juegoAventura)
        <li><a href="/juego/{{$juegoAventura->id}}">{{$juegoAventura->name}}</a></li>
        @endforeach
      </ul>

      <h3>Juegos de ficcion</h3>
      <ul>
        @foreach($juegosFiccion as $juegoFiccion)
        <li><a href="/juego/{{$juegoFiccion->id}}">{{$juegoFiccion->name}}</a></li>
        @endforeach
      </ul>
      Numero total de juegos: <p style="color:red;">{{$numJuegos}}</p>
    </body>
</html>