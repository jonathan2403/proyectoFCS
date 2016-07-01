/*autor: Jónathan Cuellar
* Validar formulario del modulo de usuario
*/

/*
 *Realiza la validacion de proyectos
  *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#encuentros-form");

formulario.validate({
    rules: {
        nombre_encuentro: {required:true},
        profesor: {required:true},
        fecha_realizacion: {required:true},
        modalidad: {required:true},
        municipio: {required:true},
    }
  });