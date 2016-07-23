/* autor: Jonathan Cuellar
* Autocompletar nommbres, apellidos y cedula de usuarios
* */
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    
    $("#nombre_profesor").autocomplete({
        //minLength: 2,
        source:function(request, response)
        {
            $("#nombre_profesor").change(function(){
            $("#id_profesor, #id_director").val('');
            $("#label_oculto_profesor").text("No ha seleccionado un registro correcto");
            });
            $.get(URL_SERVIDOR+"/buscarProfesor/"+request.term, response);//fin get
        }, /* este es el script que realiza la busqueda */

        // seleccionar id
        select:function(event, ui)
        {
            $("#nombre_profesor").val(ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.primer_apellido+" "+ui.item.segundo_apellido);
            $("#label_oculto_profesor").text("Ha seleccionado "+ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.primer_apellido+" "+ui.item.segundo_apellido);
            $("#id_profesor, #id_director").val(ui.item.id);
            return false;
        }
    }).autocomplete("instance")._renderItem = function( ul, item ){
        return $("<li class='li_autocompletar'>")
            .append(
            "<b><p>"+item.primer_nombre+" "+item.segundo_nombre+" "+item.primer_apellido+" "+item.segundo_apellido+"</p></b></li>")
            .appendTo( ul );
    };
    // fin defincion de autocompletado profesor/director
    
    // autocompletado jurado
    $("#nombre_jurado").autocomplete({
        source: function(request, response)
        {
            $("#nombre_jurado").change(function(){
            $("#id_jurado").val('');
            $("#label_oculto_jurado").text("No ha seleccionado un registro correcto");
            });
            $.getJSON(URL_SERVIDOR+"/buscarProfesor/"+request.term,{
            },response);//fin get JSON
        }, /* este es el script que realiza la busqueda */

        // seleccionar id
        select:function(event, ui)
        {
            $("#nombre_jurado").val(ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.primer_apellido+" "+ui.item.segundo_apellido);
            $("#label_oculto_jurado").text("Ha seleccionado "+ui.item.primer_nombre+" "+ui.item.segundo_nombre+" "+ui.item.primer_apellido+" "+ui.item.segundo_apellido);
            $("#id_jurado").val(ui.item.id);
            return false;
        }
    }).autocomplete("instance")._renderItem = function( ul, item ){
        return $("<li class='li_autocompletar'>")
            .append(
            " <strong><p>"+item.primer_nombre+" "+item.segundo_nombre+" "+item.primer_apellido+" "+item.segundo_apellido+"</p></strong>"
            +"</p></a></li>")
            .appendTo( ul );
    };