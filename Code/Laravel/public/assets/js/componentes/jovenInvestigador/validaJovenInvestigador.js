/*autor: Jónathan Cuellar
* Validar formulario del modulo de usuario
*/

/*
 *Realiza la validacion de proyectos
  *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#joven-investigador-form");

formulario.validate({
    rules: {
        estudiante: {required:true},
        profesor: {required:true}
    }
  });