/* autor: Jonathan Cuellar
* Autocompletar nommbres, apellidos y cedula de usuarios
* */
  $(document).ready(function(){
    $('#div_profesor').hide();
  });
  function cambio(tipo){
    $("#nombre_profesor").val('');
    $("#nombre_estudiante").val('');
    $("#id_profesor").val('');
    $("#id_estudiante").val('');
    $("#label_oculto_profesor").text('');
    $("#label_oculto_estudiante").text('');
    var tipo = $(tipo).val();
    if(tipo == 'e'){
      $('#div_estudiante').show();
      $('#div_profesor').hide();
    }else{
      $('#div_estudiante').hide();
      $('#div_profesor').show();
    }
  }

var idestudiante_oculto = $("#id_estudiante");
var input_visible = $("#nombre_estudiante");
var boton=$("#consignarsaldo");

    boton.hide();
    $("#nombre_estudiante").autocomplete({
        source: function(request, response)
        {
            input_visible.change(function(){
                    idestudiante_oculto.val('');
                    //console.log(idestudiante_oculto.val());
                $("#label_oculto_estudiante").text("No ha seleccionado un registro correcto");
            });
            $.getJSON("/buscarEstudiante/"+request.term,{
            },response);//fin get JSON
        }, /* este es el script que realiza la busqueda */

        // seleccionar id
        select:function(event, ui)
        {

            $("#nombre_estudiante").val(ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.apellido_paterno+" "+ui.item.apellido_materno);
            $("#label_oculto_estudiante").text("Ha seleccionado "+ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.apellido_paterno+" "+ui.item.apellido_materno);
            idestudiante_oculto.val(ui.item.id);
            //console.log(idestudiante_oculto.val());
            return false;
        }
    }).autocomplete("instance")._renderItem = function( ul, item ){
        return $("<li class='li_autocompletar'>")
            .append(
            " <strong><p>"+item.primer_nombre+" "+item.segundo_nombre+" "+item.apellido_paterno+" "+item.apellido_materno+"</p></strong>"
            //+" <p style='color:#9ea099'>Código: "+item.codigo_estudiante+"</p>"
            +"</p></a></li>")
            .appendTo( ul );
    };
;// fin defincion de autocompletado
