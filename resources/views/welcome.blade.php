<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Recu DWES</title>
    </head>
    <body>
      <h1>Formulario de juegos</h1>

      <div class="ps4">
        <form action="{{ route('anadir') }}" method="POST">
          @csrf
          <h2>Introduce un juego</h2>
          <span>Introduce el nombre de un juego</span>
          <input name="name" type="text"></br></br>
          <span>Introduce el nombre de la consola en la que se juega</span>
          <select name="consola">
            @foreach($consolas as $consola)
            <option value="{{$consola->id}}">{{$consola->name}}</option>
            @endforeach
          </select></br></br>
          <span>Introduce el genero del juego</span>
          <select name="genero">
            @foreach($generos as $genero)
            <option value="{{$genero->id}}">{{$genero->name}}</option>
            @endforeach
          </select></br></br>
          <button type="submit">Añadir</button>
        </form>


        <p>Mire la lista de juegos <a href="/lista">aqui</a></p>
      </div>
    </body>
</html>
