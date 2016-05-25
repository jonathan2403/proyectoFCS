@extends('layaouts.tablas')
@section('content')
  <section class="content">
    @include('componentes.opcion_grado_investigacion.partials.modal_sustentacion')
    @include('componentes.opcion_grado_investigacion.partials.modal_borrarSustentacion')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <table class="table text-center">
              <thead>
                <th>Descripción EPI</th>
                <th>Director</th>
                <th>Director 2</th>
                <th>Entidad</th>
              </thead>
              <tbody>
                <td>{{$opciongrado->descripcion}}</td>
                <td>{{$director->nombre_director}}</td>
                <td>{{isset($supervisor) ? $supervisor->nombre_supervisor : 'No Registra'}}</td>
                <td>{{isset($entidad) ? $entidad->nombre_entidad : 'No Registra'}}</td>
              </tbody>
            </table>

            <div class="box">
              <div class="box-body">
                <div class="row text-center">
                  <div class="col-xs-4"> 
                      {!!Form::label('proyecto al que pertenece')!!}<br>
                      {{isset($nombre_proyecto) ? $nombre->titulo_proyecto : 'No Registra'}}
                  </div>
                  <div class="col-xs-4"> 
                      {!!Form::label('línea de investigación')!!}<br>

                  </div>
                  <div class="col-xs-4"> 
                      {!!Form::label('grupo')!!}<br>
                      {{isset($grupo) ? $grupo->sigla : 'No Registra'}}
                  </div>
                </div>
                  <hr>
                  </div>
                <div class="row text-center">
                  <div class="col-xs-3">
                  {!!Form::label('Entrega C.I')!!}<br>
                  {{$opciongrado->fecha_entrega_ci}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Comite de Revisión')!!}<br>
                  {{$opciongrado->fecha_entrega_cr}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega al jurado')!!}<br>
                  {{$opciongrado->fecha_entrega_jurado}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega max. del jurado')!!}<br>
                  {{$opciongrado->fecha_entrega_max_jurado}}                    
                  </div>
                </div>
                <hr>
                  <!---->
                <div class="row text-center">
                  <div class="col-xs-3">
                  {!!Form::label('Entrega Real del Jurado')!!}<br>
                  {{$opciongrado->fecha_entrega_ci}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega 1')!!}<br>
                  {{$opciongrado->fecha_entrega_cr}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega 2')!!}<br>
                  {{$opciongrado->fecha_entrega_jurado}}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('Entrega max. del proyecto')!!}<br>
                  {{$opciongrado->fecha_entrega_max_jurado}}                    
                  </div>
              </div>
            </div>

            <hr>
            <h4 class="text-center"><strong>INFORME</strong></h4>
             <table class="table table-striped">
             <thead>
               <th>Entrega informe final</th>
               <th>Entrega Informe 1</th>
               <th>Entrega Informe 2</th>
               <th>Entrega De Certificado</th>
               <th>Empaste</th>
               <th>Evaluacion</th>
             </thead>
             <tbody>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td>Aprobado</td>
                <td>Laureada</td>
             </tbody>
           </table>
          </div><!-- /.box-header -->
          <div class="box-body">
            
            
              <div class="row form-group">
                <div class="col-md-3">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Agregar</button>
                </div>
              </div>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
      
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection