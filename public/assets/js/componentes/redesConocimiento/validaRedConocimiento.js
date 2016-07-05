/**
 * Valida redes de conocimiento
 */

var formulario = $("#red-conocimiento-form");

formulario.validate({
  rules:{
    nombre: {required:true},
    profesor: {required:true},
    telefono: {required:true},
    email: {required:true},
    direccion: {required:true},
    fecha_ultima_reunion: {required:true},
  }
});
