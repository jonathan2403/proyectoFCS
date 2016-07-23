/**
 * Valida redes de conocimiento
 */

var formulario = $("#red-conocimiento-form");

formulario.validate({
  rules:{
    nombre: {required:true, formato:true},
    profesor: {required:true},
    telefono: {required:true, digits:true},
    email: {required:true, email:true},
    direccion: {required:true},
    fecha_ultima_reunion: {required:true},
  },
  messages:{
  	nombre: {formato:"Formato Inválido"}
  }
});
