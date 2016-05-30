@extends('layaouts.tablas')
@section('scripts')
  {!!Html::script('/assets/js/guardaRegistro.js')!!}
@endsection
@section('content')
  <section class="content">
    @include('componentes.tipo_evento.partials.modal')  
    @include('componentes.tipo_evento.partials.modal_editar')  
    <div class="row">
      <div class="col-xs-9">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <!--<a href="{!! URL('tipo-evento/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Evento</a>-->
                <button class="btn btn-success" data-toggle="modal" data-target="#modalTipoEvento"><i class="fa fa-plus"></i> Tipo Evento</button>
              </div>
            </div>
            <table id="example" class="table table-bordered table-striped">
              <thead>
                <th>Tipo Evento</th>
                <th>Acción</th>
              </thead>
              <tbody id="datos">
              </tbody>
            </table>   
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div>                  
  </section><!-- /.content --> 
@endsection
