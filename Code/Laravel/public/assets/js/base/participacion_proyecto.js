$(document).ready(function(){
    $("#div_profesor").hide();
  });
  $("#tipo_participante").change(function(){
    var tipo_participante = $("#tipo_participante").val();
    if($('#tipo_participante').val() == 'p'){
      $('#div_estudiante').hide();
      $('#div_profesor').show();
     }else{
      $('#div_estudiante').show();
      $('#div_profesor').hide();
     }
});