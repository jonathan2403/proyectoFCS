<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><center>{{$eventos[0]->nombre_evento}}</center></h4>
      </div>
      <div class="modal-footer" style="text-align:left">
        {!! Form::open(['route' => 'asistencia.store', 'method' => 'POST']) !!}
        {!! Form::hidden('id_evento', $eventos[0]->id, ['id' => 'id_proyecto']) !!}
        <div id="div_estudiante">
          {!! Form::text('estudiante', null,['class' => 'form-control', 'id' => 'nombre_estudiante','placeholder'=>'Buscar por nombre o Código']) !!}
        <div id="label_oculto_estudiante"></div>
          {!! Form::hidden('id_estudiante', null, ['id' => 'id_estudiante']) !!}
        </div>
        <div id="div_profesor">
          {!! Form::text('profesor', null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
        <div id="label_oculto_profesor"></div>
          {!! Form::hidden('id_profesor', null, ['id' => 'id_profesor']) !!}
        </div>
        <div id="div_externo">
          {!!Form::text('persona_externa', null , ['class'=>'form-control', 'placeholder'=>'Buscar por Nombre', 'id' => 'nombre_persona_externa'])!!}
          <div id="label_persona"></div>
          {!! Form::hidden('id_externo', null, ['id' => 'id_externo']) !!}
        </div>
        <hr></br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
