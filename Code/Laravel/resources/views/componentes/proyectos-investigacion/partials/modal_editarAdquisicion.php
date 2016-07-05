<div class="modal fade" id="modal_editar_adquisicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar Nuevo Bien Adquirido</h4>
      </div>
      <form action="adquisicion/editar" method="POST">
      <input type="hidden"  name="_token" value="<?php echo csrf_token(); ?>">
      <input type="hidden" id="id_adquisicion" name="id_adquisicion" value="">
      <div class="modal-body">
          <div class="row text-center">
            <div class="col-xs-6">
              <label>Nombre del Artículo</label><br>
              <input id="text_nombre_articulo" type="text" name="nombre_articulo" class="form-control text-center" name="">
            </div>
            <div class="col-xs-3">
              <label>Valor Unitario</label><br>
              <input id="text_valor_unidad" type="text" name="valor_unidad" class="form-control text-center" name="">
            </div>
            <div class="col-xs-3">
              <label>Cant. de Unidades</label><br>
              <input id="text_cantidad" type="text" name="cantidad" class="form-control text-center" name="">
            </div>
          </div>
      </div>
      <div class="modal-footer" style="text-align:left">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button> 
        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
