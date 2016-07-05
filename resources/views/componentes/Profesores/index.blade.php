@extends('layaouts.tablas')
@section('content')
  <section class="content">
    @include('componentes.profesores.partials.modal') 
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Listado Profesores</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('programa/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Profesor</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Cedula</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach($profesores as $p)
                  <tr>     
                    <td>{{$p->cedula}}</td>
                    <td>{{$p->primer_nombre}}</td>
                    <td>{{$p->segundo_nombre}}</td>
                    <td>{{$p->primer_apellido}}</td>
                    <td>{{$p->segundo_apellido}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->telefono}}</td>
                    <td>
                      {!!link_to_route('profesores.edit', $title='Editar', $parameters=$p->id, $atrributes=['class'=>'btn btn-warning']) !!}
                      <button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $p->id !!}').modal();">Borrar</button>
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


