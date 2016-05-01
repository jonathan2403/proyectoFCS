/* autor: Jonathan Cuellar
* Autocompletar nommbres, apellidos y cedula de usuarios distribuidores y supervisores
* */
var idestudiante_oculto = $("#id_estudiante");
var input_visible = $("#nombre_estudiante");
var boton=$("#consignarsaldo");

    boton.hide();
    $("#nombre_estudiante").autocomplete({
        source: function(request, response)
        {
            input_visible.change(function(){
                //boton.hide();
                $("#personaPasarSaldo-1").text("No ha seleccionado un usuario correcto");
            });
            $.getJSON("http://localhost:8000/buscarEstudiante/"+request.term,{
            },response);//fin get JSON
        }, /* este es el script que realiza la busqueda */

        // seleccionar id
        select:function(event, ui)
        {

            input_visible.val(ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.apellido_paterno+" "+ui.item.apellido_materno);
            $("#personaPasarSaldo-1").text("Ha seleccionado "+ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.apellido_paterno+" "+ui.item.apellido_materno);
            idestudiante_oculto.val(ui.item.id);
            //boton.show();
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
        return $( "<li class='autocompletar_saldos'>"  )
            .append(
            "<div class='col-md-10 cuerpo_autocompletado'>"
            +" <strong>"+item.primer_nombre+" "+item.segundo_nombre+" "+item.apellido_paterno+" "+item.apellido_materno+"</strong>"
            +" <p style='color:#9ea099'>Código: "+item.codigo_estudiante+"</p>"
            +" </a></div>")
            .appendTo( ul );
    };
;// fin defincion de autocompletado
