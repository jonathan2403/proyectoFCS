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
          <hr></br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
