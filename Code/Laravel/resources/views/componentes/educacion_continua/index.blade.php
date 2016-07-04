@extends('layaouts.tablas')
@section('content')
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
          </div><!-- /.box-header -->
          <div class="box-body">
          <div class="pull-right"><span style="font-size:14px" class="label label-default"><a href="" data-toggle="tooltip" data-placement="bottom" title data-original-title="Descargar"><i class="fa fa-download fa-lg"></i></a></span></div>
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('educacion-continua/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Registro</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Nombre</th>
                <th>Director</th>
                <th>Aprobación</th>
                <th>País</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach($edus as $edu)
                  <tr>
                    <td>{!! link_to_route('educacion-continua.show', ucfirst($edu->nombre), $parameters=$edu->id) !!}</td>
                    <td>{{ $edu->director->nombre}}</td>
                    <td>{{ $edu->fecha_aprobacion }} - Acta: {{ $edu->numero_acta }}</td>
                    @if($edu->contexto == 'n')
                    <td>Colombia</td>
                    @else
                    <td>{{ucwords($edu->pais)}}</td>
                    @endif
                    <td>
                      {!! link_to_route('educacion-continua.edit', $title='Editar', $parameters=$edu->id, ['class'=>'btn btn-warning btn-sm']) !!}|<a href="{{URL::to('educacion/continua/'.$edu->id)}}" class="btn btn-danger btn-sm">Borrar</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
        <a href="{{URL('/educacion/continua/excel')}}" class="btn btn-default"><i class="fa fa-file-excel-o"></i> Excel</a>|<a href="{{URL('/educacion/continua/pdf')}}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> PDF</a>
      </div><!-- /.col -->
    </div>
  </section><!-- /.content -->
@endsection
