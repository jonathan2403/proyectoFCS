<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$proyectos[0]->titulo_proyecto}} </h4>
      </div>
      <div class="modal-footer" style="text-align:left">
        {!! Form::open(['route' => 'participacion.store', 'method' => 'POST']) !!}
        {!! Form::hidden('id_proyecto', $proyectos[0]->id, ['id' => 'id_proyecto']) !!}
        {!! Form::text('profesor', null,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
        <div id="label_oculto"></div>                     
        {!! Form::hidden('id_profesor', null, ['id' => 'id_profesor']) !!}
           </br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
