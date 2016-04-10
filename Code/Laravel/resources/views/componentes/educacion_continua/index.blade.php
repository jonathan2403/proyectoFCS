@extends('layaouts.tablas')
@section('content')
  <section class="content">
   
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Educacion Continuada</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('educacion-continua/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th><center>Id</center></th>
                <th><center>Nombre</center></th>
                <th><center>Director</center></th>
                <th><center>Aprobación</center></th>
                <th><center>País</center></th>
                <th><center>Acción</center></th>
              </thead>
              <tbody>
                @foreach($edus as $edu)
                  <tr>
                    <td><center>{{ $edu->id }}</center></td>
                    <td>{!! link_to_route('educacion-continua.show', ucfirst(strtolower($edu->nombre)), $parameters=$edu->id) !!}</td>
                    <td><center>{{ ucwords(strtolower($edu->full_name))}}</center></td>
                    <td><center>{{ $edu->fecha_aprobacion }} - Acta: {{ $edu->numero_acta }}</center></td>
                    <td><center>{{ ucwords(strtolower($edu->pais)) }}</center></td>
                    <td><center>
                      {!! link_to_route('educacion-continua.edit', $title='Editar', $parameters=$edu->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
                      <!--<button type="button" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $edu->id !!}').modal();">Borrar</button></center>-->
                    </td>
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
