@foreach($estudiantes as $estudiante) 
  <div class="modal modal-default" id="modalBorrar{!!$estudiante->sustentacion!!}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Eliminar Participante</h4>
        </div>
        <div class="modal-body">
        <p>¿Esta Seguro De Eliminar a <strong>{{ucwords($estudiante->nombre_estudiante)}}</strong>?</p>
        </div>
        <div class="modal-footer">
          {!! Form::open(array("route"=>array("sustentacion.destroy",$estudiante->sustentacion),"method"=>"DELETE")) !!}
          <button type="submit" class="btn btn-success">Aceptar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            {!! Form::close() !!}
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
@endforeach