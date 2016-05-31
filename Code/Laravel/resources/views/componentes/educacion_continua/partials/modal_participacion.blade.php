<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><center>{{$educacion_continua->nombre}}</center></h4>
      </div>
      <div class="modal-footer" style="text-align:left">
        {!! Form::open(['route' => 'participacion.store', 'method' => 'POST']) !!}
              {!! Form::hidden('id_educacion_continua', $educacion_continua->id, ['id' => 'id_proyecto']) !!}
              <div class="col-xs-12" id="div_profesor">
                {!! Form::select('id_profesor', $nombre_profesor->toArray(), null, ['id' => 'profesor', 'class' => 'form-control select', 'placeholder' => 'Busca por nombre o Cédula']) !!}
              </div>
              <div class="col-xs-12" id="div_estudiante">
                {!! Form::select('id_estudiante', $nombre_estudiante->toArray(), null, ['id' => 'estudiante', 'class' => 'form-control select', 'placeholder' => 'Busca por nombre o Código']) !!}
              </div>
            </br></br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
