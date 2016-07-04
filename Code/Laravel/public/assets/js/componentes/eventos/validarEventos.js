/*autor: Jónathan Cuellar
* Validar eventos
*/

 /*
  *  muestra los mensajes de dichas validaciones
  */
var formulario=$("#eventos-form");

formulario.validate({
    rules: {
    departamento: {required: true},
    municipio: {required: true},
    numero_consejo: {required: true, digits: true},
    fecha: {required: true},
    nombre_evento: {required: true, formato:true},
    id_tipoeventos: {required: true},    
    valor_efectivo: {digits: true},
    horas_certificadas: {digits: true},
    beneficiados_administrativos: {digits: true},
    beneficiados_estudiantes: {digits: true},
    beneficiados_egresado: {digits: true},
    beneficiados_docentes: {digits: true},
    beneficiados_publico: {digits: true},
    beneficiados_privado: {digits: true},
    beneficiados_general: {digits: true},
    beneficiados_academia: {digits: true},
    beneficiados_alianza: {digits: true},
    beneficiados_sociedad: {digits: true},
    beneficiados_otros: {digits: true},
    beneficiados_0_10: {digits: true},
    beneficiados_11_20: {digits: true},
    beneficiados_21_30: {digits: true},
    beneficiados_31_60: {digits: true},
    beneficiados_mayores_60: {digits: true},
    beneficiados_hombres: {digits: true},
    beneficiados_mujeres: {digits: true},

    },
    messages:{
      numero_consejo: {digits: "Este campo debe ser numérico."},
      nombre_evento: {formato: "Formato inválido."}
    }
  });

/*
 *Realiza la validacion de la edicion de un usuario y
 *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#form_usuarios_editar");

formulario.validate({
  rules: {
    cedula:{required:true, digits: true, maxlength:20},
    nombre: {required: true,andrea: true, maxlength:50},
    apellido:{required: true,andrea: true, maxlength:50},
    fecha_nacimiento:{required: true , fecha_andrea:true},
    genero:{required:true},
    direccion:{required: true,maxlength:100},
    telefono:{required: true, maxlength:20},
    password:{minlength:6},
    //confirmarpass:{equalTo:"#password"},
  },
  messages: {
    cedula:{required:"Cedula requerida", digits:"Solo escriba numeros", maxlength:"No Escriba mas de 20 caracteres"},
    nombre: {required:"Nombre requerido",andrea: "Escriba solo letras",maxlength:"No Escriba mas de 50 caracteres"},
    apellido: {required:"Apellido requerido",andrea: "Escriba solo letras", maxlength:"No Escriba mas de 50 caracteres"},
    fecha_nacimiento:{required:"El campo es requerido",fecha_andrea:"Formato inválido"},
    genero:{required:"Seleccione su genero"},
    direccion:{required:"Dirección requerida", maxlength:"No escriba mas de 100 caracteres"},
    telefono:{required:"Telefóno requerido",maxlength:"No escriba mas de 20 digitos"},
    password:{minlength:"Minimo 6 caracteres"},
    //confirmarpass:{equalTo:"Escriba el mismo valor de nuevo"},
  },
});