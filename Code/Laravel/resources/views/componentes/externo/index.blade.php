@extends('layaouts.tablas')
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
            {!!Form::open(['url' => 'externo/proyeccion/create', 'method' => 'GET'])!!}
              <div class="col-md-3">
                {!!Form::select('tipo_externo', ['e' => 'Entidad', 'p' => 'Persona'],null, ['class' => 'form-control', 'id' => 'select_tipo_externo'])!!}
              </div>
              <div class="col-md-3">
                {!!Form::submit('Nuevo Externo', ['class' => 'btn btn-success'])!!}
              </div>
            {!!Form::close()!!}
            </div>
            <div id="dvData">
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Teléfono</th>
                  <th>Dirección</th>
                  <th>Tipo</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  @foreach($externos as $externo)
                    <tr>
                      @if($externo->tipo_externo == 'e')
                      <td>{{$externo->nombre_externo}}</td>
                      @else
                      <td><a href="{{URL::to('externo/ver/'.$externo->id)}}">{{$externo->nombre_externo}}</a></td>
                      @endif
                      <td>{{$externo->correo}}</td>
                      <td>{{$externo->telefono}}</td>
                      <td>{{$externo->direccion}}</td>
                      @if($externo->tipo_externo == 'e')
                      <td>Entidad</td>
                      @else
                      <td>Persona</td>
                      @endif
                      <td><center>
                        <a href="{{URL::to('externo/edit/'.$externo->id.'/'.$componente)}}" class="btn btn-warning btn-sm">Editar</a>|<a class="btn btn-danger btn-sm" href="{{URL::to('externo/eliminar/'.$externo->id)}}">Borrar</a>
                         </center>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
    <a href="{{URL('/externos/index/null/excel')}}" class="btn btn-default" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>|<a href="{{URL('/externos/index/null/pdf')}}" class="btn btn-default" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
  </section><!-- /.content -->
@endsection
