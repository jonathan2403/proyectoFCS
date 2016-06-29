$('input[type=radio][name=contexto]').change(function() {
		var select_departamento = $("#select_departamento");
		var select_municipio = $("#select_municipio");
        if (this.value == 'n') {
        	$('#text_pais').val('');
            $('#text_ciudad').val('');
        	$('#div_lugar_internacional').hide();
            $('#div_lugar_nacional').fadeIn();
            $('.text_lugar_internacional').empty();
            select_municipio.empty();
        }
        else if (this.value == 'i') {
            $('#div_lugar_nacional').hide();
            $('#div_lugar_internacional').fadeIn();
            $('#text_pais').val('');
            $('#text_ciudad').val('');
            select_departamento.prop('selectedIndex',0);
            select_municipio.empty();
			select_municipio.prop("disabled", "disabled");	
        }
    });

$("#select_departamento").on('change', function(){
	// variables que controlan los select [departamento, municipio]
	var select_departamento = $("#select_departamento");
	var select_municipio = $("#select_municipio");
	// si ha seleccionado algo en el select departamento
	if(select_departamento.val() != ''){
	// habilita municipios
	select_municipio.prop("disabled", false);
	// consulta lista de municipios
	var ruta = URL_SERVIDOR+'/consultar/municipios/'+select_departamento.val();
	$.get(ruta, function(municipios){
		if(municipios){	
			select_municipio.empty();
			$.each(municipios, function(key, value) {   
   		    select_municipio.append($("<option></opton>")
                    .attr("value", value['municipio'])
                    .text(value['nombre'])); 
			});
		}
	});
	} // cierra if
	// si no selecciona nada en departamentos
	else{
		select_municipio.empty();
		select_municipio.prop("disabled", "disabled");	
	}
});

$("#select_municipio").on('change', function(){
	//alert($("#select_municipio").val());
});