@extends('layaouts.tablas')
@section('content')
  <section class="content">
    @include('componentes.eventos.partials.modal')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Listado Eventos</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('evento/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th><center>Acta de Consejo</center></th>
                <th><center>Nombre Evento</center></th>
                <th><center>Fecha</center></th>
                <th><center>Lugar</center></th>
                <th><center>Tipo Evento</center></th>
                <th><center>Acción</center></th>
              </thead>
              <tbody>
                @foreach($eventos as $evento)
                  <tr>
                    <td><center>{{ $evento->numero_consejo }}</center></td>
                    <td>{!! link_to_route('evento.show', ucfirst($evento->nombre_evento), $parameters=$evento->id) !!}</td>
                    <td>{{ $evento->fecha }}</td>
                    <td>{{ $evento->lugar }}</td>
                    <td>{{ $evento->tipo->nombre_tipoevento }}</td>
                    <td><center>
                      {!! link_to_route('evento.edit', $title='Editar', $parameters=$evento->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
                      </center>
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
