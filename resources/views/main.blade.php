<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title >@yield('titulo')</title>
  <!-- Diario Interactivo -->
  <!-- Bootstrap CSS -->
  @section('head')
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
  <!-- main styles -->
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/estilos-index.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/registrarse.css') }}"/>
  <script src="{{ asset('js/jquery.min.js')}}"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="shortcut icon" href="{{ asset('images/herramientas.ico') }}"/>
  @show


</head>

<body>
@yield('header-content')



@section('footerjs')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>

@show
</body>
</html>
