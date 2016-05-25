/* autor: Jonathan Cuellar
* Autocompletar nommbres, apellidos y cedula de usuarios
* */

var identidad_oculto = $("#id_entidad");
var input_visible = $("#nombre_entidad");

    $("#nombre_entidad").autocomplete({
        source: function(request, response)
        {
            input_visible.change(function(){
                $("#label_oculto").text("No ha seleccionado una entidad correcta.");
            });
            $.getJSON("http://localhost:8000/buscarExternoEntidad/"+request.term,{
            },response);//fin get JSON
        }, /* este es el script que realiza la busqueda */

        // seleccionar id
        select:function(event, ui)
        {

            input_visible.val(ui.item.nombre_externo);
            $("#label_oculto").text("Ha seleccionado "+ui.item.nombre_externo);
            identidad_oculto.val(ui.item.id);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
        
        return $( "<li class='li_autocompletar'>"  )
            .append(
            " <strong><p>"+item.nombre_externo+"</p></strong>"
            +" </a></li>")
            .appendTo( ul );
    };
;// fin defincion de autocompletado
