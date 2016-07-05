@extends('layaouts.tablas')
@section('scripts')
    {!!Html::script('assets/js/load.js')!!}
    {!!Html::script('assets/js/base/profesor_modal.js')!!}
    {!!Html::script('assets/js/componentes/adquisicion/adquisicionCrud.js')!!}
@endsection
@section('content')
<section class="content">
@include('componentes.proyectos-investigacion.partials.modal_participacion')
@include('componentes.proyectos-investigacion.partials.modal_borrarParticipacion')
@include('componentes.proyectos-investigacion.partials.modal_adquisicion')
@include('componentes.proyectos-investigacion.partials.modal_editarAdquisicion')
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')

            <div class="box">
              <div class="box-body">
                <div class="row text-center">
                  <div class="col-xs-3">
                    {!!Form::label('inicio - n° acta')!!}<br>
                    {{$proyectos[0]->fecha_inicio.' - '.$proyectos[0]->numero_acta}}
                  </div>
                  <div class="col-xs-3">
                    {!!Form::label('avance n° 1')!!}<br>
                    {{ $proyectos[0]->fecha_avance1 }}
                  </div>
                  <div class="col-xs-3">
                    {!!Form::label('avance n° 2')!!}<br>
                    {{ $proyectos[0]->fecha_avance2 }}
                  </div>
                  <div class="col-xs-3">
                    {!!Form::label('avance n° 3')!!}<br>
                    {{ $proyectos[0]->fecha_avance3 }}
                  </div>
                </div>
                <hr>
                <div class="row text-center">
                  <div class="col-xs-3">
                    {!!Form::label('red conocimiento')!!}<br>
                    {{ isset($proyectos[0]->red_conocimiento) ? $proyectos[0]->red_conocimiento : 'No Registra'}}
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('informe final')!!}<br>
                  {{ $proyectos[0]->fecha_informe_final }}                    
                  </div>
                  <div class="col-xs-3">
                  {!!Form::label('prórroga')!!}<br>
                  {{ $proyectos[0]->fecha_prorroga }}                    
                  </div>
                  <div class="col-xs-3">
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
                  {!!Form::label('población Estudio')!!}
                  </div>
                  <div class="col-xs-3"><br>
                  {!!Form::label('producto')!!}
                  </div>
                </div>
                <hr>
              </div>
            </div><!--Cierra box tabla de datos-->

      <!-- START CUSTOM TABS -->
      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              @if(session('adquisicion'))
              <li><a href="#tab_1" data-toggle="tab"><h4 class="box-title">Participantes</h4></a></li>
              <li class="active"><a href="#tab_2" data-toggle="tab"><h4 class="box-title">Bienes Adquiridos</h4></a></li>
              @else
              <li class="active"><a href="#tab_1" data-toggle="tab"><h4 class="box-title">Participantes</h4></a></li>
              <li ><a href="#tab_2" data-toggle="tab"><h4 class="box-title">Bienes Adquiridos</h4></a></li>
              @endif
            </ul>
            <div class="tab-content">
            @if(session('adquisicion'))
              <div class="tab-pane" id="tab_1">
            @else
              <div class="tab-pane active" id="tab_1">
            @endif
                <div class="box-body">
            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Nuevo Participante</button>
              <div class="row text-center">
                    <div class="col-xs-12">
                      <hr>
                      <table class="table table-bordered table-striped">
                        <thead>
                          <th>N° Documento</th>
                          <th>Nombre</th>
                          <th>Teléfono</th>
                          <th>Email</th>
                          <th>Acción</th>
                        </thead>
                        <tbody>
                        @foreach($profesores as $profesor)
                          <tr>
                            <td>{{$profesor->cedula}}</td>
                            <td>{{ucwords($profesor->full_name)}}</td>
                            <td>{{$profesor->telefono}}</td>
                            <td>{{$profesor->email}}</td>
                            <td>
                              <center><button type="button" value="{{$profesor->full_name}}" class="btn btn-danger btn-sm" onclick="$('#modalBorrar{!! $profesor->id !!}').modal(this);">Borrar</button></center>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>                    
              </div>
            </div>
              </div>
              <!-- /.tab-pane -->
            @if(session('adquisicion'))
              <div class="tab-pane active" id="tab_2">
            @else
              <div class="tab-pane" id="tab_2">
            @endif
              <div class="box-body">
                <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal_adquisicion"><i class="fa fa-plus"></i> Adquisición</button>
              <div class="row text-center">
                <div class="col-xs-12">
                  <table id="table_adquisicion" class="table table-striped">
                  <thead>
                    <th>Nombre del Artículo</th>
                    <th>Valor Unitario</th>
                    <th>Cantidad</th>
                    <th>Acción</th>
                  </thead>
                  <tbody id="tbody_adquisicion">
                  @foreach($bienes as $bien)
                  <tr>
                    <td>{{$bien->nombre_articulo}}</td>
                    <td>{{$bien->valor_unidad}}</td>
                    <td>{{$bien->cantidad}}</td>
                    <td><button type="button" class="btn btn-warning btn-sm" onClick="editarAdquisicion(this)" data-target="#modal_editar_adquisicion" data-toggle="modal" value="<?php echo $bien->id;?>">Editar</button>|<a class="btn btn-danger btn-sm" href="{{URL::to('proyectos-investigacion/adquisicion/eliminar/'.$bien->id)}}">Borrar</a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                </div>
              </div>
              </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->

        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
@endsection
