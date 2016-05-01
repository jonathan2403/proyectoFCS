/* autor: Andrea Camargo
* Autocompletar nommbres, apellidos y cedula de usuarios distribuidores y supervisores
* */
//var input_oculto= $("#personaPasarSaldo_escondido");
var input_visible=$("#nombre_estudiante");
var boton=$("#consignarsaldo");

    boton.hide();
    $("#nombre_estudiante").autocomplete({
        source: function(request, response)
        {
            /*input_visible.change(function(){
                boton.hide();
                $("#personaPasarSaldo-1").text("No ha seleccionado un usuario correcto");
            });*/
            $.getJSON("http://localhost:8000/buscarEstudiante/"+request.term,{
                //          term:  ( request.term )
            },response);//fin get JSON
        }, /* este es el script que realiza la busqueda */
        //minLength: 2, /* le decimos que espere hasta que haya 2 caracteres escritos */
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
