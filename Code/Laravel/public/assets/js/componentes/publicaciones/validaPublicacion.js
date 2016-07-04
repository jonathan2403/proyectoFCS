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
        tipo: {required:true},
        id_opcion_grado: {required:true},
        fecha_publicacion: {required:true},
    }
  });

/**
 * Valida publicaciones investigación
 */

var formulario = $('#publicacion-investigacion-form');
formulario.validate({
  rules:{
    descripcion: {required:true},
    tipo: {required:true},
    fecha_publicacion: {required:true},
  }
});
