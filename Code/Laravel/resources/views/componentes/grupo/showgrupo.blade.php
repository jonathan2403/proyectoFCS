@extends('layaouts.tablas')
@section('content')
  <section class="content">
   @include('componentes.grupo.partials.modal_adscripcion')
   @include('componentes.grupo.partials.modal_borrarAdscripcion')
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <table class="table">
              <thead>
                <th>Sigla del Grupo</th>
                <th>Nombre del Grupo</th>
              </thead>
              <tbody>
                <td>{{ucfirst($grupos[0]->sigla)}}</td>
                <td>{{ucfirst($grupos[0]->descripcion)}}</td>
              </tbody>
            </table>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Agregar</button>
              </div>
            </div>
            @if($errors->any())
            <div class="alert alert-danger" role="alert">
              <p>Por favor corrige errores</p>
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div id="dvData">
               <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  @foreach($estudiantes as $estudiante)
                    <tr>
                      <td><center>{{$estudiante->codigo_estudiante}}</center></td>
                      <td>{{ucwords($estudiante->full_name)}}</td>
                      <td>{{$estudiante->email}}</td>
                      <td><center>
                        <button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $estudiante->id !!}').modal();">Borrar</button> </center>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
      <button type="button" class="btn" onClick ="$('#example3').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><span class="glyphicon glyphicon-download"></span> PDF</button>|<button id="button-excel" class="btn"><span class="glyphicon glyphicon-download"></span> Excel</button>
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection
@section('scripts')
  <script type="text/javascript">
  $(document).ready(function () {
           $("#button-excel").click(function(e) {
          window.open('data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,' + encodeURIComponent($('#dvData').html()));
        e.preventDefault();
        });
    });
  </script>
@endsection
