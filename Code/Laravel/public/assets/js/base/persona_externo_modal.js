/* autor: Jonathan Cuellar
* Autocompletar nommbres, apellidos y cedula de usuarios
* */

    $("#nombre_persona_externa").autocomplete({
        source: function(request, response)
        {
            $("#nombre_persona_externa").change(function(){
                $("#label_persona").text("No ha seleccionado un registro correcto");
            });
            $.getJSON(URL_SERVIDOR+"/buscarExternoPersona/"+request.term,{
            },response);//fin get JSON
        }, /* este es el script que realiza la busqueda */

        // seleccionar id
        select:function(event, ui)
        {
            $("#nombre_persona_externa").val(ui.item.nombre_externo);
            $("#label_persona").text("Ha seleccionado "+ui.item.nombre_externo);
            $("#id_externo").val(ui.item.id);
            console.log(ui.item.id);
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
