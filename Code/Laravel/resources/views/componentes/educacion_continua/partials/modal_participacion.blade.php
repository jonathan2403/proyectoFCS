<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><center>{{$edus[0]->nombre}}</center></h4>
      </div>
      <div class="modal-footer" style="text-align:left">
        {!! Form::open(['route' => 'participacion.store', 'method' => 'POST']) !!}
              {!! Form::hidden('id_educacion_continua', $edus[0]->id, ['id' => 'id_proyecto']) !!}
              {!! Form::hidden('participacion', 'ec', ['id' => 'id_proyecto']) !!}
              <center>{!!Form::label('Profesor')!!}
              {!!Form::radio('tipo', 'p', false)!!} &nbsp
              {!!Form::label('Estudiante')!!}
              {!!Form::radio('tipo', 'e', false)!!}</center></br>
              {!! Form::select('id_participante', [$nombre_profesor->toArray(), $nombre_estudiante->toArray()], null, ['id' => 'select_coinvestigador', 'class' => 'form-control select', 'placeholder' => 'Seleccione Profesor o Estudiante']) !!}
            </br></br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
