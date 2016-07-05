@extends('layaouts.tablas')
@section('content')
  <section class="content">
    @include('componentes.tipo_proyecto.partials.modal')
    <div class="row">
      <div class="col-xs-9">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Listado Tipo Proyecto</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('tipo-proyecto/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Tipo De Proyecto</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Tipo Proyecto</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach($tipo_proyectos as $tproyecto)
                  <tr>
                    <td>{{ $tproyecto->nombre_tipoproyecto}}</td>
                    <td>
                      {!! link_to_route('tipo-proyecto.edit', $title='Editar', $parameters=$tproyecto->id, $atrributes=['class'=>'btn btn-warning']) !!}
                      <button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $tproyecto->id !!}').modal();">Borrar</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div>
  </section><!-- /.content -->
@endsection
