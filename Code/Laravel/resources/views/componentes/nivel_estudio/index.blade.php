@extends('layaouts.tablas')
@section('content')
  <section class="content"> 
    @include('componentes.nivel_estudio.partials.modal')
    <div class="row">
      <div class="col-xs-9">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Listado De Niveles De Estudio</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('programa/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Nivel Estudio</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Nivel De Estudio</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach($nestudio as $n)
                  <tr>
                    <td>{{$n->nombre_nivelestudio}}</td>
                    <td>
                      {!! link_to_route('nivel-estudio.edit', $title='Editar', $parameters=$p->id, $atrributes=['class'=>'btn btn-warning']) !!}
                      <button type="button" class="btn btn-danger" onclick="$('#modalBorrar{!! $n->id !!}').modal();">Borrar</button>
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