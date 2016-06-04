$(document).ready(function(){

	var table = $('#datos');
	var route = 'consultar/tipo/evento';
	$.get(route, function(res){
		$(res).each(function(key, value){
			table.append("<tr><td>"+value.nombre_tipoevento+"</td><td><button value='"+value.id+"' OnClick='mostrar(this)' data-toggle='modal' data-target='#modalEditarTipoEvento' class='btn btn-warning btn-sm'>Editar</button></td></tr>");
		});
	});

	// click botón agregar tipo evento
	var btnTipoEvento = $('#btnGuardaEtipoEvento');
	btnTipoEvento.click(function(){
		
		var _token = $('#token').val();
		var txt_tipo_evento = $('#txt_tipo_evento').val();
		var modal = $('#modalTipoEvento');
		$.ajax({
			method: "POST",
			headers: { 'X-XSRF-TOKEN' : _token },
			url: "/crear/tipo/evento",
			data: { nombre_tipoevento: txt_tipo_evento },
			success:function(data){
  				$('#example > tbody').append('<tr><td>'
  					+data.nombre_tipoevento+'</td><td><button class="btn btn-warning btn-sm" value="'+data.id+'" OnClick="mostrar(this)" data-toggle="modal" data-target="#modalEditarTipoEvento">Editar</button></td></tr>');			
  				//carga();
			}
		}); // cierra petición
		$('#txt_tipo_evento').val('')
		modal.modal('hide');
	}); // cierra click

	// click botón editar tipo evento
	var btnEditaTipoEvento = $('#btnEditaTipoEvento');
	btnEditaTipoEvento.click(function(){
		actualizar();
	});

});

//	carga datos
function carga(){
	var table = $('#datos');
	table.empty();
	var route = 'http://localhost:8000/consultar/tipo/evento';
	$.get(route, function(res){
		$(res).each(function(key, value){
			table.append("<tr><td>"+value.nombre_tipoevento+"</td><td><button value='"+value.id+"' OnClick='mostrar(this)' data-toggle='modal' data-target='#modalEditarTipoEvento' class='btn btn-warning btn-sm'>Editar</button></td></tr>");
		});
	});
}

// muestra datos correspondientes en editar
function mostrar(btn){
		var route = '/tipo-evento/'+btn.value+'/edit';
		$.get(route, function(res){
			console.log(res);
			$('#nombre_tipo_evento').val(res.nombre_tipoevento);
			$('#id_tipoevento').val(res.id);
		});
	}

// actualiza registro
function actualizar(){
	var txt_tipo_evento = $('#nombre_tipo_evento').val();
	var _token = $('#token').val();
	var id = $('#id_tipoevento').val();
	$.ajax({
		method: "PUT",
		headers: {'X-XSRF-TOKEN' : _token},
		url: '/tipo-evento/'+id+'',
		data: {
			id: id,
			nombre_tipoevento: txt_tipo_evento
		},
	success:function(){
		carga();
		$('#modalEditarTipoEvento').modal('hide');
	}
	}); // cierra ajax
}