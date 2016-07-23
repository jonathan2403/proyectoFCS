var input=$("input[type=text]");
input.focusout(function() {
    var excepciones=new Array("password");
    var $elemento=$(this);
    if(excepciones.indexOf($elemento.attr("name"))==-1)
    {
        $elemento.val($elemento.val().toUpperCase());
    }

});

