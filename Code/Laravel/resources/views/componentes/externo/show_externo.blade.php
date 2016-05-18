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
            <div id="dvData">
              <table class="table table-bordered table-striped text-center">
                <thead>
                  <th>Nombre</th>
                  <th>Área de Conocimiento</th>
                  <th>Nivel de Estudio</th>
                  <th>Experiencia</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$externo->nombre_externo}}</td>
                    <td>{{$externo->area_conocimiento}}</td>
                    <td>{{$externo->nivel_estudio}}</td>
                    <td>{{$externo->experiencia}}</td>
                    <td><center>
                      {!! link_to_route('externo.edit', $title='Editar', $parameters=$externo->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
                         </center>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
    <a href="{{URL('/excel/externos/show/'.$externo->id)}}" class="btn btn-default" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>|<a href="{{URL('/excel/externos/show/'.$externo->id)}}" class="btn btn-default" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
  </section><!-- /.content -->
@endsection
