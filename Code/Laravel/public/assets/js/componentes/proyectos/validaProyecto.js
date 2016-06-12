/*autor: Jónathan Cuellar
* Validar formulario del modulo de usuario
*/

/*
 *Realiza la validacion de proyectos
  *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#proyecto-proyeccion-form");

formulario.validate({
    rules: {
    titulo_proyecto: {required:true},
    fecha_inicio: {required:true},
    fecha_entrega_ci: {required:true},
    concepto_1: {required:true},
    fecha_aprobacion: {required:true},
    numero_acta: {required:true},
    ejecutado: {required:true},
    id_director: {required:true},
    profesor: {required:true},
    }
  });