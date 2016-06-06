/* autor: Jonathan Cuellar
* Autocompletar nommbres, apellidos y cedula de usuarios
* */

    $("#nombre_profesor").autocomplete({
        source: function(request, response)
        {
            $("#nombre_profesor").change(function(){
            $("#id_profesor").val('');
            $("#label_oculto_profesor").text("No ha seleccionado un registro correcto");
            });
            $.getJSON("/buscarProfesor/"+request.term,{
            },response);//fin get JSON
        }, /* este es el script que realiza la busqueda */

        // seleccionar id
        select:function(event, ui)
        {
            $("#nombre_profesor").val(ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.primer_apellido+" "+ui.item.segundo_apellido);
            $("#label_oculto_profesor").text("Ha seleccionado "+ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.primer_apellido+" "+ui.item.segundo_apellido);
            $("#id_profesor").val(ui.item.id);
            console.log(ui.item.id);
            return false;
        }
    }).autocomplete("instance")._renderItem = function( ul, item ){
        return $("<li class='li_autocompletar'>")
            .append(
            " <strong><p>"+item.primer_nombre+" "+item.segundo_nombre+" "+item.primer_apellido+" "+item.segundo_apellido+"</p></strong>"
            +"</p></a></li>")
            .appendTo( ul );
    };
;// fin defincion de autocompletado
