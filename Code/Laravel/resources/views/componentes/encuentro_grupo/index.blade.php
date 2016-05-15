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
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('encuentro-grupo/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Nombre del Encuentro</th>
                <th>Ponente</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Grupo</th>
                <th>Modalidad</th>
                <th>Acción</th>
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
    </div>
    <a href="{{URL('/excel/encuentros')}}" class="btn btn-default" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>|<a href="{{URL('/pdf/encuentros')}}" class="btn btn-default" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
  </section><!-- /.content -->
@endsection
