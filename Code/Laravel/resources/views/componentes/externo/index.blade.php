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
              <div class="col-md-3">
                <a href="{!! URL('externo/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
              </div>
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
                      <td>{!! link_to_route('externo.show', $externo->nombre_externo, $parameters=$externo->id) !!}</td>
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
                      {!! link_to_route('externo.edit', $title='Editar', $parameters=$externo->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
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
    <a href="{{URL('/excel/externos/index/null')}}" class="btn btn-default" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>|<a href="{{URL('/pdf/externos/index/null')}}" class="btn btn-default" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
  </section><!-- /.content -->
@endsection
