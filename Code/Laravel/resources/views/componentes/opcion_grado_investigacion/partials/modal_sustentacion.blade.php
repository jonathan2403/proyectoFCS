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
      <div class="modal-footer" style="text-align:left">
        {!! Form::open(['route' => 'sustentacion.store', 'method' => 'POST']) !!}
              {!! Form::hidden('id_opcion_grado', $opciongrado->id, ['id' => 'id_opcion_grado']) !!}
              {!! Form::select('id_estudiante', $nombre_estudiante->toArray(), null, ['id' => 'select_estudiante', 'class' => 'form-control', 'placeholder' => 'Seleccione Estudiante']) !!}
                  </br></br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
