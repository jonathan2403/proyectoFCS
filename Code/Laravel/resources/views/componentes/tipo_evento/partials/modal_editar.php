<div class="modal fade" tabindex="-1" role="dialog" id="modalEditarTipoEvento">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tipo de Evento</h4>
      </div>
      <div class="modal-body">
        <?php
            $encrypter = app('Illuminate\Encryption\Encrypter');
            $encrypted_token = $encrypter->encrypt(csrf_token());
        ?>
        <input id="token" type="hidden" value="{{$encrypted_token}}">
        <input type="text" name="" class="form-control" id="nombre_tipo_evento">
        <input type="hidden" name="" id="id_tipoevento">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnEditaTipoEvento">Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
