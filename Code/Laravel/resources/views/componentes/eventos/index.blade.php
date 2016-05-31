@extends('layaouts.tablas')
@section('content')
  <section class="content">
    @include('componentes.eventos.partials.modal')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('evento/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Evento</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Acta de Consejo</th>
                <th>Nombre Evento</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Tipo Evento</th>
                <th>Acción</th>
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
        <a href="{{URL('/eventos/excel')}}" class="btn btn-default"><i class="fa fa-file-excel-o"></i> Excel</a>|<a href="{{URL('/eventos/pdf')}}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> PDF</a>
      </div><!-- /.col -->
    </div>
  </section><!-- /.content -->
@endsection