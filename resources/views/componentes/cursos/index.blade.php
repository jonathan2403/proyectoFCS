@extends('layaouts.tablas')
@section('content')
  <section class="content"> 
    @include('componentes.cursos.partials.modal')  
    <div class="row">
      <div class="col-xs-12">
        <div class="xample">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Listado Cursos</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
            <a href="{!! URL('cursos/create') !!}" class="btn btna fa-plus"></i> Nuevo Curso</a> </div> </div>
            <table id="" class="table table-bordered table-striped">
              <thead>
                <th>Codigo Del Curso</th>
                <th>Nombre Del Curso</th>
                <th>Tipo Curso</th>
                <th>Semestre</th>
                <th>Area</th>
                <th>Creditos</th>
                <th>Plan De Estudio</th>
                <th>Acciones</th>
              </thead>
              <tbody>
		[example]
                @foreach($cursos as $t)
                  <tr> 
                    <td>{{ $t->codigo_curso}}</td>
                    <td>{{ $t->nombre_curso}}</td>
                    <td>{{ $t->tipo_curso}}</td>
                    <td>{{ $t->semestre}}</td>
                    <td>{{ $t->area}}</td>
                    <td>{{ $t->creditos}}</td>
                    <td>{{ $t->plan->codigo}}</td>
                    <td>
                      {!! link_to_route('cursos.edit', $title='Editar', $parameters=$t->id, $atrributes=['class'=>'btn btn-warning']) !!}
                      <button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $t->id !!}').modal();">Borrar</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>   
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->                
  </section><!-- /.content -->
@endsection
