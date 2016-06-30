/*autor: Jónathan Cuellar
* Validar formulario del modulo de usuario
*/

/*
  * Realiza la validacion de la creacion de una 
  *  
 */
var formulario=$("#pasantia-form");

formulario.validate({
    rules: {
    descripcion: {required:true},
    id_externo: {required:true},
    id_entidad: {required:true},
    fecha_entrega_ci: {required:true},
    concepto_1: {required:true},
    fecha_aprobacion: {required:true},
    numero_acta: {required:true},
    finalizado: {required:true},
    id_director: {required:true},
    profesor: {required:true},
    persona_externa: {required:true},
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
    persona_externa: {required:true},
  },
});

/*
 *  Realiza la validacion posgrado
 *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#posgrado-form");

formulario.validate({
  rules: {
    descripcion: {required:true},
    profesor: {required:true},
    concepto_1: {required:true},
    fecha_aprobacion: {required:true},
    numero_acta: {required:true},
    finalizado: {required:true},
  }
});