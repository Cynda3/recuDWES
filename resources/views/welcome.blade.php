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
          <h2>Introduce un juego de ps4</h2>
          <input name="name" type="text"></br></br>
          <input name="name" type="text"></br></br>
          <input name="genero" type="text"></br></br>
          <button type="submit">Añadir</button>
        </form>
      </div>
    </body>
</html>
