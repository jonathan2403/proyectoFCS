<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$publicacion->descripcion}}</h4>
      </div>
      <div class="modal-body">
        <p>Registrar participante en la publicación</p>
      </div>
      <div class="modal-footer">
        {!! Form::open(['route' => 'publica.store', 'method' => 'POST']) !!}
        <div class="col-xs-12 text-center">
          {!!Form::label('Estudiante')!!}
          {!!Form::radio('tipo', 'e', true, ['class' => 'iradio_minimal-red', 'onchange' => 'cambio(this)'])!!}&nbsp
          {!!Form::label('Profesor')!!}
          {!!Form::radio('tipo', 'p', false, ['class' => 'iradio_minimal-red', 'onchange' => 'cambio(this)'])!!}
          <hr>
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
          <hr>
        </div>
              {!! Form::hidden('id_publicacion', $publicacion->id, ['id' => 'id_opcion_grado']) !!}
         <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>
         <button type="submit" class="btn btn-success btn-sm">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
