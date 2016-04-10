$(document).ready(function(){
    $('.select').select2({
       width : '100%',
       minimumInputLength: '1',
       placeholder : 'seleccione opción'
      });
    $('.select_tipo').select2({
      width : '100%',
      placeholder : 'Seleccion Tipo'
    });
    $("#select_profesor").change(function() {
       id_profesor = $('#select_profesor').val();
      });
    $('.picker').datepicker({
      format : "dd-mm-yyyy"
    });
    $('.picker').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('input').iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal-red'
      });
    $('#text_nombre').attr('size', 30);
    $('#text_cantidad').attr('size', 3);
    $('#text_unidad').attr('size', 6);
    });