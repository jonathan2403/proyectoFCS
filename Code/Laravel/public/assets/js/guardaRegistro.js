$(document).ready(function(){

	var table = $('#datos');
	var route = URL_SERVIDOR+'/consultar/tipo/evento';
	$.get(route, function(res){
		$(res).each(function(key, value){
			table.append("<tr><td>"+value.nombre_tipoevento+"</td><td><button value='"+value.id+"' OnClick='mostrar(this)' data-toggle='modal' data-target='#modalEditarTipoEvento' class='btn btn-warning btn-sm'>Editar</button>|<button value='"+value.id+"' OnClick='eliminar(this)' class='btn btn-danger btn-sm'>Borrar</button></td></tr>");
		});
	});

	// click botón editar tipo evento
	$("#btnEditaTipoEvento").click(function(){
		actualizar();
	});

	// click botón crear tipo evento
	$('#btnGuardatipoEvento').on('click', function(){
		registrar_tipo_evento();
	});

}); // termina document ready

// click mensaje error
$("#msg-error").click(function(){
	$("#msg-error").toggle(200);
});

// click mensaje success
$("#msg-success").click(function(){
	$("#msg-success").toggle(200);
});

// click botón agregar tipo evento
	function registrar_tipo_evento(){	
		var _token = $('#token').val();
		var txt_tipo_evento = $('#txt_tipo_evento').val();
		var modal = $('#modalTipoEvento');
		$.ajax({
			method: "POST",
			headers: { 'X-XSRF-TOKEN' : _token },
			url: URL_SERVIDOR+"/crear/tipo/evento",
			data: { nombre_tipoevento: txt_tipo_evento },
			success:function(data){
				if(data.error){
					//console.log(data.errores);
					$("#mensaje_error").html(data.errores['nombre_tipoevento']);
					$("#msg-error").fadeIn();
				}else{
					$('#example > tbody').append('<tr><td>'
  					+data.nombre_tipoevento+'</td><td><button class="btn btn-warning btn-sm" value="'+data.id+'" OnClick="mostrar(this)" data-toggle="modal" data-target="#modalEditarTipoEvento">Editar</button>|<button OnClick="eliminar(this)" value="'+data.id+'" class="btn btn-danger btn-sm">Borrar</button></td></tr>');			
  					$("#msg-error").fadeOut();
  					$("#mensaje_success").html("Registro Exitoso!");
  					$("#msg-success").fadeIn();
				}
			}
		}); // cierra petición
		$('#txt_tipo_evento').val('')
		modal.modal('hide');
	}; // cierra click

//	carga datos
function carga(){
	var table = $('#datos');
	table.empty();
	var route = URL_SERVIDOR+'/consultar/tipo/evento';
	$.get(route, function(res){
		console.log(res);
		$(res).each(function(key, value){
			table.append("<tr><td>"+value.nombre_tipoevento+"</td><td><button value='"+value.id+"' OnClick='mostrar(this)' data-toggle='modal' data-target='#modalEditarTipoEvento' class='btn btn-warning btn-sm'>Editar</button>|<button value='"+value.id+"' OnClick='eliminar(this)' class='btn btn-danger btn-sm'>Borrar</button></td></tr>");
		});
	});
}

// muestra datos correspondientes en editar
function mostrar(btn){
		var route = URL_SERVIDOR+'/tipo-evento/'+btn.value+'/edit';
		$.get(route, function(res){
			console.log(res);
			$('#nombre_tipo_evento').val(res.nombre_tipoevento);
			$('#id_tipoevento').val(res.id);
		});
	}

function eliminar(btn){
	var _token = $('#token').val();
	var id = btn.value;
	$.ajax({
		method: "GET",
		headers: {'X-XSRF-TOKEN' : _token},
		url: URL_SERVIDOR+'/tipo-evento/eliminar/'+id,
		data: {
			id: id
		},
	success:function(){
		carga();
		$("#mensaje_success").html("Registro Eliminado!");
  		$("#msg-success").fadeIn();
		$("#msg-error").fadeOut();
	}
	}); // cierra ajax
}

// actualiza registro
function actualizar(){
	var txt_tipo_evento = $('#nombre_tipo_evento').val();
	var _token = $('#token').val();
	var id = $('#id_tipoevento').val();
	$.ajax({
		method: "GET",
		headers: {'X-XSRF-TOKEN' : _token},
		url: URL_SERVIDOR+'/tipo-evento/actualizar/'+id+'',
		data: {
			id: id,
			nombre_tipoevento: txt_tipo_evento
		},
	success:function(){
		carga();
		$('#modalEditarTipoEvento').modal('hide');
		$("#mensaje_success").html("Registro Actualizado!");
  		$("#msg-success").fadeIn();
	}
	}); // cierra ajax
}