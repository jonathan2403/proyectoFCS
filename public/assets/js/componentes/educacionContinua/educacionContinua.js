/*autor: Jónathan Cuellar
* Validar educación continua
*/

/*
  *  Realiza la validacion educación continua
  *  muestra los mensajes de dichas validaciones
 */
var formulario=$("#educacion-continua-form");
formulario.validate({
    rules: {
      nombre: {required: true, formato: true},
      numero_acta: {required: true, digits: true, maxlength:20},
      profesor: {required: true},
      fecha_aprobacion: {required: true},
      fecha_inicio: {required: true},
      contexto: {required: true},
      departamento: {required: function(elemento){
        return $("input:radio[name='contexto']:checked").val() == 'n';
      }, digits: true, range: [1, 32]},
      pais: {required: function(elemento){
        return $("input:radio[name='contexto']:checked").val() == 'i';
      }},
      horas_certificadas: {digits: true, maxlength:20},
      recurso: {digits: true, maxlength:20},
      recurso_humano: {digits: true, maxlength:20},
      muebles_equipo: {digits: true, maxlength:20},
      servicios: {digits: true, maxlength:20},
      material: {digits: true, maxlength:20},
      gastos_viaje: {digits: true, maxlength:20},
      otros_gastos: {digits: true, maxlength:20},
    },
    messages: {
      nombre: {formato: "Formato inválido."},
      numero_acta: {digits: "Este campo debe ser numérico.", maxlength:"No Escriba mas de 20 caracteres"},
      departamento: {digits: "Valor inválido.", range: "Valor inválido."},
      horas_certificadas: {digits: "Este campo debe ser numérico.", maxlength:"No Escriba mas de 20 caracteres"},
      recurso: {digits: "Este campo debe ser numérico.", maxlength:"No Escriba mas de 20 caracteres"},
      recurso_humano: {digits: "Este campo debe ser numérico.", maxlength:"No Escriba mas de 20 caracteres"},
      muebles_equipo: {digits: "Este campo debe ser numérico.", maxlength:"No Escriba mas de 20 caracteres"},
      servicios: {digits: "Este campo debe ser numérico.", maxlength:"No Escriba mas de 20 caracteres"},
      material: {digits: "Este campo debe ser numérico.", maxlength:"No Escriba mas de 20 caracteres"},
      gastos_viaje: {digits: "Este campo debe ser numérico.", maxlength:"No Escriba mas de 20 caracteres"},
      otros_gastos: {digits: "Este campo debe ser numérico.", maxlength:"No Escriba mas de 20 caracteres"},
    }
  });