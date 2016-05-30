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
        {!! Form::select('id_participante', $nombre_estudiante->toArray(), null, ['id' => 'select_coinvestigador', 'class' => 'form-control select']) !!}
            </br></br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
