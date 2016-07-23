function mostrarFechas(){
	$("#btn_reporte").hide();
	$("#div_fechas").fadeIn(200);
}

$("#btn_cerrar_fechas").on("click", function(){
	$("#div_fechas").hide();
	$("#btn_reporte").fadeIn(200);
	$("input[name='from']").val('').removeClass('error');
	$("input[name='to']").val('').removeClass('error');
});

//validación
var formulario=$("#form_reporte");
formulario.validate({
    rules: {
     from: "required",
     to: "required"
    },
   errorPlacement: function(error, element) {
    element.closest("div.form-group").removeClass('has-success').addClass('has-error');
  },
  success: function(error, element) {
    $(element).closest("div.form-group").addClass('has-success').removeClass('has-error');
  }
  });