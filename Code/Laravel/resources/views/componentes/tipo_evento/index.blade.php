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
            <div id="msg-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
              <strong id="mensaje_success"></strong>
            </div>
            <div id="msg-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
              <h4><i class="icon fa fa-warning"></i>Error!</h4>
              <strong id="mensaje_error"></strong>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body">
            <div class="row form-group">
              <div class="col-md-3">
                <button class="btn btn-success" data-toggle="modal" data-target="#modalTipoEvento"><i class="fa fa-plus"></i> Tipo Evento</button>
              </div>
            </div>
            <div class="col-xs-9">
              <table id="example" class="table table-bordered table-striped text-center">
                <thead>
                  <th>Tipo Evento</th>
                  <th>Acción</th>
                </thead>
                <tbody id="datos">
                </tbody>
              </table>   
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div>                  
  </section><!-- /.content --> 
@endsection
