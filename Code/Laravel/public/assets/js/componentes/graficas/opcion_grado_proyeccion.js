
consultarDatosGeneralGrafica();

/*****
 * * 
 * */
function consultarDatosGeneralGrafica(){
    var route = URL_SERVIDOR+'/datos/grafica/opcion/grados/proyeccion';
    $.get(route, function(res){
        if(res){
            console.log(res);
            creacionGraficaTorta(res);
        }else{
            alert('error en el servidor');
        }
    });
}


/*******
 * ** genera formatea los datos remotos , a la grafica de torta
 * *
 *  @param jsonUsuario atributo del json usuarios
 *  @param listaGrados lista de los nombre de los grados
 * **/
function getDatosGraficaTorta(jsonUsuarioDatos,listaGrados)
{
    var lista=[];
    var sumaParticipacionTotal=0;


    for(var j=0; j< jsonUsuarioDatos.length ; j++)
    {
            sumaParticipacionTotal+= jsonUsuarioDatos[j].partidas;
     }

    for(var i=0; i< listaGrados.length; i++)
    {
        var json_auxiliar={'name':'Grado '+listaGrados[i] , y:0};

        for(var j=0; j< jsonUsuarioDatos.length ; j++)
        {
            if(jsonUsuarioDatos[j].nombre_grado==listaGrados[i])
            {
                json_auxiliar.y= parseFloat(jsonUsuarioDatos[j].partidas)/sumaParticipacionTotal*100;

            }
        }


        lista.push(json_auxiliar);
    }

    return lista;

}


/**********
 * **
 * **/
function creacionGraficaTorta(data){
    var suma = data.epps + data.pos + data.pas;
    console.log(suma);
    var epps = (data.epps*100)/suma;
    var pas = (data.pas*100)/suma;
    var pos = (data.pos*100)/suma;

    console.log(epps+pas+pos);

    $('#grafica_porcentaje').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Tipo de Opciones de Grado'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Porcentaje',
            colorByPoint: true,
            data: [{
                name: 'EPPS',
                y: epps
            }, {
                name: 'Pasantía',
                y: pas,
                sliced: true,
                selected: true
            }, {
                name: 'Posgrado',
                y: pos
            }]
        }]
    });

}