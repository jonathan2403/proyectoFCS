/*autor: Jónathan Cuellar
* Validar formulario del modulo de usuario
*/

/*
 *Realiza la validacion de la creacion de un usuario y
  *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#grupos-form");

formulario.validate({
    rules: {
        descripcion: {required:true},
        tipo: {required:true},
        categoria: {required:true},
        id_profesor: {required:true},
    }
  });

/*
 *Realiza la validacion de la edicion de un usuario y
 *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#form_usuarios_editar");

formulario.validate({
  rules: {
    cedula:{required:true, digits: true, maxlength:20},
    nombre: {required: true,andrea: true, maxlength:50},
    apellido:{required: true,andrea: true, maxlength:50},
    fecha_nacimiento:{required: true , fecha_andrea:true},
    genero:{required:true},
    direccion:{required: true,maxlength:100},
    telefono:{required: true, maxlength:20},
    password:{minlength:6},
    //confirmarpass:{equalTo:"#password"},
  },
  messages: {
    cedula:{required:"Cedula requerida", digits:"Solo escriba numeros", maxlength:"No Escriba mas de 20 caracteres"},
    nombre: {required:"Nombre requerido",andrea: "Escriba solo letras",maxlength:"No Escriba mas de 50 caracteres"},
    apellido: {required:"Apellido requerido",andrea: "Escriba solo letras", maxlength:"No Escriba mas de 50 caracteres"},
    fecha_nacimiento:{required:"El campo es requerido",fecha_andrea:"Formato inválido"},
    genero:{required:"Seleccione su genero"},
    direccion:{required:"Dirección requerida", maxlength:"No escriba mas de 100 caracteres"},
    telefono:{required:"Telefóno requerido",maxlength:"No escriba mas de 20 digitos"},
    password:{minlength:"Minimo 6 caracteres"},
    //confirmarpass:{equalTo:"Escriba el mismo valor de nuevo"},
  },
});