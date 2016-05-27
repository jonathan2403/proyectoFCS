@extends('layaouts.tablas')
@section('scripts')
    {!!Html::script('assets/js/load.js')!!}
@endsection
@section('content')
<section class="content">
@include('componentes.proyectos-investigacion.partials.modal_participacion')
 @include('componentes.proyectos-investigacion.partials.modal_borrarParticipacion')
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')

            <div class="box">
              <div class="box-body">
                <div class="row text-center">
                  <div class="col-xs-4">
                    {!!Form::label('avance n° 1')!!}<br>
                    {{ $proyectos[0]->fecha_avance1 }}
                  </div>
                  <div class="col-xs-4">
                    {!!Form::label('avance n° 2')!!}<br>
                    {{ $proyectos[0]->fecha_avance2 }}
                  </div>
                  <div class="col-xs-4">
                    {!!Form::label('avance n° 3')!!}<br>
                    {{ $proyectos[0]->fecha_avance3 }}
                  </div>
                </div>
                <hr>
                <div class="row text-center">
                  <div class="col-xs-4">
                  {!!Form::label('informe final')!!}<br>
                  {{ $proyectos[0]->fecha_informe_final }}                    
                  </div>
                  <div class="col-xs-4">
                  {!!Form::label('prórroga')!!}<br>
                  {{ $proyectos[0]->fecha_prorroga }}                    
                  </div>
                  <div class="col-xs-4">
                  {!!Form::label('valor')!!}<br>
                  {{ $proyectos[0]->valor_efectivo }}                    
                  </div>
                </div>
                <hr>
                <div class="row text-center">
                  <div class="col-xs-3"><br>
                  {!!Form::label('tipo de beneficiado')!!}
                  </div>
                  <div class="col-xs-3"><br>
                  {!!Form::label('beneficiados')!!}
                  </div>
                  <div class="col-xs-3"><br>
                  {!!Form::label('poblacion Estudio')!!}
                  </div>
                  <div class="col-xs-3"><br>
                  {!!Form::label('producto')!!}
                  </div>
                </div>
                <hr>
              </div>
            </div><!--Cierra box tabla de datos-->

            <!--Participantes-->
          <div class="box box-danger">
                    <div class="box-header with-border">
                      <h5 class="box-title">Participantes</h5>
                    </div>
            <div class="box-body">
              <div class="row text-center">
                    <div class="col-xs-12">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Nuevo</button>
                      <hr>
                      <table class="table table-bordered table-striped text-center">
                        <thead>
                          <th>Código</th>
                          <th>N° Documento</th>
                          <th>Nombre</th>
                          <th>Teléfono</th>
                          <th>Email</th>
                          <th>Acción</th>
                        </thead>
                        <tbody>
                        <tr>
                          <td>160002403</td>
                          <td>1121888930</td>
                        </tr>
                    </table>
                    </div>                    
              </div>
            </div>
           </div><!--Cierra participantes-->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection
