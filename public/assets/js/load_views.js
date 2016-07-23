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
    $('.picker').datepicker();
     $('[data-toggle="tooltip"]').tooltip();  
    $(".select2").select2();
     $.datepicker.regional['es'] = {
         closeText: 'Cerrar',
         prevText: '<Ant',
         nextText: 'Sig>',
         currentText: 'Hoy',
         monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
         monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
         dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
         dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
         dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
         weekHeader: 'Sm',
         dateFormat: 'dd/mm/yy',
         firstDay: 1,
         isRTL: false,
         showMonthAfterYear: false,
         yearSuffix: ''
         };
         $.datepicker.setDefaults($.datepicker.regional['es']);
    /*$('input[type=radio]').iCheck({
        radioClass: 'iradio_minimal-red'
      });
    $('.select').select2({
       width : '100%',
       minimumInputLength: '1',
       placeholder : 'seleccione opción'
      });*/