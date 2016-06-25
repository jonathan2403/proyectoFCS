$(document).ready(function(){
    $("#div_profesor").hide();
    $('#div_externo').hide();
  });
  $("#tipo_participante").change(function(){
    $("input[type=text]").val('');

    $("#label_oculto_estudiante").text('');
    $("#label_oculto_profesor").text('');
    $("#label_persona").text('');
    var tipo_participante = $("#tipo_participante").val();
    if($('#tipo_participante').val() == 'p'){
      $('#div_estudiante').hide();
      $('#div_externo').hide();
      $('#div_profesor').show();
     }
     if($('#tipo_participante').val() == 'es'){
      $('#div_estudiante').show();
      $('#div_profesor').hide();
      $('#div_externo').hide();
     }
     if($('#tipo_participante').val() == 'ex'){
      $('#div_estudiante').hide();
      $('#div_profesor').hide();
      $('#div_externo').show();
     }
});
