@extends('layaouts.tablas')
@section('content')
  <section class="content">
  
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Listado De Encuentros</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('encuentro-grupo/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Nombre Encuentro</th>
                <th>Ponente</th>
                <th><center>Fecha</center></th>
                <th><center>Lugar</center></th>
                <th><center>Grupo</center></th>
                 <th><center>Modalidad</center></th>
                <th><center>Acción</center></th>
              </thead>
              <tbody>
              @foreach($encuentros as $encuentro)
              <tr>
                <td>{{ucfirst($encuentro->nombre_encuentro)}}</td>
                <td>{{ucwords($encuentro->ponente)}}</td>
                <td><center>{{$encuentro->fecha_realizacion}}</center></td>
                <td><center>{{ucfirst($encuentro->lugar)}}</center></td>
                @if($encuentro->tipo_grupo=='i')
                <td><center>Investigación</center></td>
                @endif
                @if($encuentro->tipo_grupo=='ps')
                <td><center>Proyección Social</center></td>
                @endif
                @if($encuentro->tipo_grupo=='e')
                <td><center>Estudio</center></td>
                @endif
                <td><center>{{ucfirst($encuentro->modalidad)}}</center></td>
                <td><center>{!! link_to_route('encuentro-grupo.edit', $title='Editar', $parameters=$encuentro->id, $attributes=['class' => 'btn btn-warning btn-sm']) !!}</center></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
      <button type="button" class="btn" onClick ="$('#example3').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><span class="glyphicon glyphicon-download"></span> PDF</button>|<button id="button-excel" class="btn"><span class="glyphicon glyphicon-download"></span> Excel</button>
    </div>
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
