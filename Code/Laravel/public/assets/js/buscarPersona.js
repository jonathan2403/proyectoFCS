/* autor: Andrea Camargo
* Autocompletar nommbres, apellidos y cedula de usuarios distribuidores y supervisores
* */
var input_oculto= $("#personaPasarSaldo_escondido");
var input_visible=$("#personaPasarSaldo");
var boton=$("#consignarsaldo");

    boton.hide();
    $("#personaPasarSaldo").autocomplete({
        source: function(request, response)
        {
            input_visible.change(function(){
                boton.hide();
                $("#personaPasarSaldo-1").text("No ha seleccionado un usuario correcto");
            });
            $.getJSON(URL_SERVIDOR+"saldos/buscarPersona/"+request.term,{
                //          term:  ( request.term )
            },response);//fin get JSON
        }, /* este es el script que realiza la busqueda */
        //minLength: 2, /* le decimos que espere hasta que haya 2 caracteres escritos */
        select:function(event, ui)
        {

            input_visible.val(ui.item.nombreusuario+" "+ui.item.apellidousuario+" ");
            $("#personaPasarSaldo-1").text("Ha seleccionado "+ui.item.nombreusuario+" "+ui.item.apellidousuario);
            input_oculto.val(ui.item.idusuario);
            boton.show();

            return false;
        }
    })
        .autocomplete( "instance" )._renderItem = function( ul, item ) {
        return $( "<li class='autcompletar_saldos' > "  )
            .append(
            "  <div class='col-md-2 img_autocompletado'> "
            +" <a href='#fakelink' class='dropdown-toggle line_base_autompletado' data-toggle='dropdown'> "
            +" <img src='"+URL_SERVIDOR+'img_db/usuario/'+item.imagen+"' class='avatar img-circle imagen_autocompletado' alt=''>"
            +"</div> "
            +"<div class='col-md-10 cuerpo_autocompletado'>"
            +" <strong>"+item.nombreusuario+" "+item.apellidousuario+"</strong>"
            +" <p style='color:#9ea099'>Cedula: "+item.cedulausuario+"</p>"
            +" </a></div>")
            // .append( "<a>" + item.name+ "" + item.cedula + "</a>" )
                .appendTo( ul );
    };
;// fin defincion de autocompletado

