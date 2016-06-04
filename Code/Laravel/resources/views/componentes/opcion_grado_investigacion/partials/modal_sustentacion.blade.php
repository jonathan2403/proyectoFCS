<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$opciongrado->descripcion}}</h4>
      </div>
      <div class="modal-body">
        <p>Agregar Estudiante a la Opcion de Grado</p>
      </div>
      <div class="modal-footer">
        {!! Form::open(['route' => 'sustentacion.store', 'method' => 'POST']) !!}
        {!! Form::hidden('id_opcion_grado', $opciongrado->id, ['id' => 'id_opcion_grado']) !!}
        {!! Form::text('estudiante', isset($nombre_estudiante) ? $nombre_estudiante:null,['class' => 'form-control', 'id' => 'nombre_estudiante','placeholder'=>'Buscar por nombre o Código']) !!}
        <div id="label_oculto"></div>                     
        {!! Form::hidden('id_estudiante', null, ['id' => 'id_estudiante']) !!}
           </br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
