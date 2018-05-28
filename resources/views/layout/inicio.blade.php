@extends('main')

@section('titulo')
  Diario Interactivo
@endsection

@section('header-content')
<div class="container-fluid navbar-dark bg-dark fixed-top">
  <nav class="navbar navbar-expand-lg  container ">
    <a class="navbar-brand mr-2" href="">
      <img src="images/instrumentos.png" width="60" height="60" class="d-incline-block aling-top " alt="logo">AMDI
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active ml-2">
          <a class="nav-link" href="#inicio" data-click="scroll-to-target">INICIO</a>
        </li>
        <li class="nav-item ml-2">
          <a class="nav-link" href="#nosotros" data-click="scroll-to-target">NOSOTROS</a>
        </li>
        <li class="nav-item ml-2">
          <a class="nav-link" href="#contacto"  data-click="scroll-to-target">CONTACTO</a>
        </li>
        <li class="nav-item ml-2 py-1">
          <a href="#"  data-toggle="modal" data-target="#registros" class="btn btn-outline-primary btn-block ">REGISTRARME</a>
        </li>

        <li class="nav-item ml-2 py-1">

          <a href="#" onclick="window.location='{{ url("login") }}'" data-toggle="modal" data-target="#login"  class="btn btn-outline-primary btn-block ">INICIAR SESIÓN</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
@endsection

@section('main-content')
<section id="inicio">
  <div class="container-fluid">
    <div class="row" >
      <div   class="col-lg-10" class="col-md-8" class="col-sm-10"  class="col-xl-12">
        <img class="imagen" src="images/diario.png" class="img-responsive" width="500" height="580">
        <h1><p class="inicio">CAPTURA TUS</p></h1>
        <h2><p class="momentos">MOMENTOS</p></h2>
        <h3><p>Guarda tus archivos de las actividades</p></h3>
        <h3><p>escolares en tu diario personal. </p></h3>
     </div>
  </div>
</div>
</section>
@endsection
@yield('main-content')
