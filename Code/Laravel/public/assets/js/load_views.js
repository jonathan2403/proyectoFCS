    $('.select').select2({
      width : '100%'
    });
    $('.select_tipo').select2({
      width : '100%',
      placeholder : 'Seleccion Tipo'
    });
    $("#select_profesor").change(function() {
       id_profesor = $('#select_profesor').val();
      });
    //formato fecha
    $('.picker').datepicker({
      format : "dd/mm/yyyy"
    })
    /*$('input[type=radio]').iCheck({
        radioClass: 'iradio_minimal-red'
      });
    $('.select').select2({
       width : '100%',
       minimumInputLength: '1',
       placeholder : 'seleccione opción'
      });*/