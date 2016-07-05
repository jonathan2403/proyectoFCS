//Crud de Adquisición de bienes proyectos de investigación

$(document).ready(function(){

	// botón registrar adquisición
	$("#btn_registrar_adquisicion").on("click", function(){
		registraAdquisicion();
	});
});

// Registrar nueva adquisición
function registraAdquisicion(){
	alert('Resdy');
}

// Editar adquisición
function editarAdquisicion(boton_editar){
	var ruta = URL_SERVIDOR+'/proyectos-investigacion/adquisicion/editar/'+boton_editar.value;
	$.get(ruta, function(datos){
		$("#text_nombre_articulo").val(datos.datos['nombre_articulo']);
		$("#text_valor_unidad").val(datos.datos['valor_unidad']);
		$("#text_cantidad").val(datos.datos['cantidad']);
		$("#id_adquisicion").val(datos.datos['id']);
	});
}

