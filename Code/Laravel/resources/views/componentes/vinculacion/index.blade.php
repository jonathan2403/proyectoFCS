@extends('layaouts.tablas')
@section('content')
  <section class="content"> 
    @include('componentes.vinculacion.partials.modal')
    <div class="row">
      <div class="col-xs-9">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Listado Tipo Vinculaciones</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Tipo Vinculación</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach($vinculacion as $v)
                  <tr>     
                    <td>{{$v->nombre_vinculacion}}</td>
                    <td>
                        {!! link_to_route('vinculacion.edit', $title='Editar', $parameters=$v->id, $atrributes=['class'=>'btn btn-warning']) !!}
                           <button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $v->id !!}').modal();">Borrar</button>
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