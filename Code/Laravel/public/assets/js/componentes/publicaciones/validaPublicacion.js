/*autor: Jónathan Cuellar
* Validar formulario del modulo de usuario
*/

/*
 *Realiza la validacion de proyectos
  *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#publicacion-form");

formulario.validate({
    rules: {
        descripcion: {required:true},
        id_proyecto: {required:true},
    }
  });