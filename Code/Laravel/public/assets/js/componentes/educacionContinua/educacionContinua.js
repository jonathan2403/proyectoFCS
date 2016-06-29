/*autor: Jónathan Cuellar
* Validar educación continua
*/

/*
 *Realiza la validacion educación continua
  *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#educacion-continua-form");

formulario.validate({
    rules: {
      nombre: {required: true},
      numero_acta: {required: true},
      profesor: {required: true},
      fecha_aprobacion: {required: true},
      fecha_inicio: {required: true},
      //pais: {required: true},
      //ciudad: {required: true},
    }
  });