<div class="modal fade" id="modal_adquisicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$proyectos[0]->titulo_proyecto}} </h4>
      </div>
      <div class="modal-footer" style="text-align:left">
        <div class="row text-center">
                <div class="col-xs-6">
                {!!Form::label('nombre del artículo')!!}<br>
                {!!Form::text('nombre_articulo', null, ['class' => 'form-control'])!!}
                </div>
                <div class="col-xs-2">
                {!!Form::label('valor unidad')!!}<br>
                {!!Form::text('valor_unidad', null, ['class' => 'form-control'])!!}
                </div>
                <div class="col-xs-2">
                {!!Form::label('cantidad')!!}<br>
                {!!Form::text('cantidad', null, ['class' => 'form-control'])!!}
                </div>
              </div>
      </div>
    </div>
  </div>
</div>
