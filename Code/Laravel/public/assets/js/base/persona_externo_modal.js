/* autor: Jonathan Cuellar
* Autocompletar nommbres, apellidos y cedula de usuarios
* */

var id_externo = $("#id_persona_externa");
var input_visible = $("#nombre_persona_externa");

    $("#nombre_persona_externa").autocomplete({
        source: function(request, response)
        {
            input_visible.change(function(){
                $("#label_oculto").text("No ha seleccionado un usuario correcto");
            });
            $.getJSON("/buscarExternoPersona/"+request.term,{
            },response);//fin get JSON
        }, /* este es el script que realiza la busqueda */

        // seleccionar id
        select:function(event, ui)
        {
            input_visible.val(ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.apellido_paterno+" "+ui.item.apellido_materno);
            $("#label_oculto").text("Ha seleccionado "+ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.apellido_paterno+" "+ui.item.apellido_materno);
            id_externo.val(ui.item.id);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
        console.log(item);
        return $( "<li class='li_autocompletar'>"  )
            .append(
            " <strong><p>"+item.nombre_externo+"</p></strong>"
            +" </a></li>")
            .appendTo( ul );
    };
;// fin defincion de autocompletado
