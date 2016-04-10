@extends('layaouts.tablas')
@section('content')
  <section class="content">
    @include('usuario.partials.modal') 
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Listado de Usuarios</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('usuario/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Usuario</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Usuario</th>
                <th>Email</th>
                <th>Dependencia</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->dependencia}}</td>
                    <td>
                      {!! link_to_route('usuario.edit', $title='Editar', $parameters=$user->id, $atrributes=['class'=>'btn btn-warning']) !!}
                      <button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $user->id !!}').modal();">Borrar</button>
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