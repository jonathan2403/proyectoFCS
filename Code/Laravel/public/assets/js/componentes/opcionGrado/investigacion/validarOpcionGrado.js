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
    id_externo: {required:true},
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
var formulario=$("#mon_revision-form");

formulario.validate({
    rules: {
    descripcion: {required:true},
    nombre_profesor: {required:true},
    fecha_entrega_ci: {required:true},
    fecha_entrega_cr: {required:true},
    fecha_entrega_jurado: {required:true},
    fecha_entrega_max_jurado: {required:true},
    fecha_entrega_real_jurado: {required:true},
    concepto_1: {required:true},
    finalizado: {required:true},
    }
  });

/*
 *  Realiza la validacion monografía investigativa
 *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#mon_investigativa-form");

formulario.validate({
  rules: {
    descripcion: {required:true},
    nombre_profesor: {required:true},
    fecha_entrega_ci: {required:true},
    fecha_entrega_cr: {required:true},
    fecha_entrega_jurado: {required:true},
    fecha_entrega_max_jurado: {required:true},
    fecha_entrega_real_jurado: {required:true},
    concepto_1: {required:true},
    finalizado: {required:true},
  }
});

/*
 *  Realiza la validacion epi
 *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#epi-form");

formulario.validate({
  rules: {
    descripcion: {required:true},
    nombre_profesor: {required:true},
    fecha_entrega_ci: {required:true},
    fecha_entrega_cr: {required:true},
    fecha_entrega_jurado: {required:true},
    fecha_entrega_max_jurado: {required:true},
    fecha_entrega_real_jurado: {required:true},
    concepto_1: {required:true},
    finalizado: {required:true},
  }
});