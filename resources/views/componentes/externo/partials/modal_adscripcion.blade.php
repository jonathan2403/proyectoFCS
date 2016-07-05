<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$grupos[0]->sigla}} : {{$grupos[0]->descripcion}}</h4>
      </div>
      <div class="modal-body">
        <p>Agregar Estudiante al Grupo</p>    
      </div>
      <div class="modal-footer">
        {!! Form::open(['route' => 'adscripcion.store', 'method' => 'POST']) !!}
              {!! Form::hidden('id_grupo', $grupos[0]->id, ['id' => 'id_grupo']) !!}
              {!! Form::text('id_estudiante', null, ['class' => 'form-control', 'placeholder' => 'codigo estudiante', 'required']) !!}
                  </br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>