@extends('layaouts.tablas')
@section('content')
  <section class="content">
    @include('componentes.tipo_evento.partials.modal')  
    <div class="row">
      <div class="col-xs-9">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <h3 class="box-title">Listado Tipo Eventos</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <a href="{!! URL('tipo-evento/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Evento</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Tipo Evento</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach($tipo_eventos as $tevento)
                  <tr>     
                    <td>{{ ucfirst($tevento->nombre_tipoevento)}}</td>
                    <td>
                      {!! link_to_route('tipo-evento.edit', $title='Editar', $parameters=$tevento->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
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