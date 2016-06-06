/*autor: Jónathan Cuellar
* Validar formulario del modulo de usuario
*/

/*
 *Realiza la validacion de la creacion de un usuario y
  *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#pasantia-form");

formulario.validate({
    rules: {
        descripcion: {required:true},
        tipo: {required:true},
        categoria: {required:true},
        profesor: {required:true},
    }
  });

/*
 *  Realiza la validacion epps
 *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#epps-form");

formulario.validate({
  rules: {
    descripcion: {required:true},
    id_externo: {required:true},
    fecha_entrega_ci: {required:true},
    concepto_1: {required:true},
    fecha_aprobacion: {required:true},
    numero_acta: {required:true},
    finalizado: {required:true},
    id_director: {required:true},
    profesor: {required:true},
  }
});