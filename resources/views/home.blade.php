@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-4  bg-light">
      <div class="container">
        <img src="images/defect.jpg" class="imgPerfil" alt="">

        <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Borrar
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Buscar</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview -->
            <button type="button" name="button1" class="btn btn-primary btn-block" width="80" height="50" >Cambiar Imagen</button>
      </div>

    </div>
    <div class="col-8 bg-secondary">
      <div class="container">
        <img src="" class="imgPortada" alt="">
        <button type="button" name="button2" class="btn btn-primary btn-portada" width="80" height="50" >Cambiar Portada</button>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-4 bg-light">
      <div class="container cont-1">
        <div class="btn-group-vertical btn-block">
          <button type="button" class="btn btn-info btn-block">Crear Grupo</button>
          <div class="btn-group">
            <button type="button" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">
               Lista de Grupos
            </button>
            <div class="dropdown-menu btn-block">
              <a class="dropdown-item" href="#">Prueba 1</a>
              <a class="dropdown-item" href="#">prueba 2</a>
            </div>
          </div>
          <button type="button" class="btn btn-info btn-block">Calendario</button>
          <div style="overflow:hidden;">
              <div class="form-group">
                  <div class="row">
                      <div class="col-md-8">
                          <div id="datetimepicker12"></div>
                      </div>
                  </div>
              </div>
              <script type="text/javascript">
                  $(function () {
                      $('#datetimepicker12').datetimepicker({
                          inline: true,
                          sideBySide: true
                      });
                  });
              </script>
          </div>
        </div>
      </div>
    </div>
    <div class="col-8 bg-light">
      <div class="container">
        <div class="card">
          <div class="card-header">
            Título
          </div>
          <div class="card-body">
            <div class="form-group">
              <!-- <label for="comment"></label> -->
              <textarea class="form-control" rows="3" id="commentTitle" placeholder="Escriba un título:"></textarea>
            </div>
            <a href="#" class="btn btn-primary">Agregar</a>
          </div>
        </div>

        <hr>
        <!-- Content select group -->
        <div class="input-group mb-3">
          <select class="custom-select" id="inputGroupSelect02">
            <option disabled selected>Seleccione el grupo al que va dirigida la publicación</option>
            <option value="1">Grupo 2</option>
            <option value="2">Grupo 3</option>
            <option value="3">Grupo 4</option>
          </select>
          <div class="input-group-append">
            <label class="input-group-text" for="inputGroupSelect02">Elegir</label>
          </div>
        </div>
        <hr>

        <div class="card cont-2">
          <div class="card-header">
            Área de Publicaciones
          </div>
          <div class="card-body">
            <div class="form-group">
              <textarea class="form-control" rows="5" id="comment" placeholder="¿Que estas pensando...?"></textarea>
            </div>
            <a href="#" class="btn btn-primary">Publicar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-4 bg-light">
      <div class="container cont-1">
        <!-- Empty Content -->
      </div>
    </div>
    <div class="col-8 bg-light">
      <div class="container">
        <div class="card-deck">
          <div class="card bg-secondary cont-2">
            <div class="card-header">Configuración</div>
            <div class="card-body text-center">
              <p class="card-text" style="color:#fff !important;">Cambiar Tema</p>
              <div class="form-group">
                <select class="form-control" id="sel1">
                  <option>Tema 1</option>
                  <option>Tema 2</option>
                </select>
              </div>
              <button type="button" class="btn btn-info btn-block">Cambiar mi Contraseña</button>
              <button type="button" class="btn btn-info btn-block">Cambiar mi Correo</button>
            </div>
          </div>
          <div class="card bg-secondary cont-2">
            <div class="card-header">Datos Personales</div>
            <div class="card-body text-center">
              <button type="button" class="btn btn-info btn-block">Información Personal</button>
              <button type="button" class="btn btn-info btn-block">Formación Académica</button>
              <button type="button" class="btn btn-info btn-block">Información Social</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection






<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> -->
