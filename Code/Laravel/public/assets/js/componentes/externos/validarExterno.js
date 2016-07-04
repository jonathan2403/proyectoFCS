/*autor: Jónathan Cuellar
* Validar eventos
*/

 /*
  *  muestra los mensajes de dichas validaciones
  */
var formulario=$("#externos-form");

formulario.validate({
    rules: {
        nombre_externo: {required: true},
        tipo_externo: {required: true},
        correo: {required: true, email: true},
        telefono: {required: true, digits: true},  
    }
  });
