$(document).ready(function() {

  //http://www.disfrutalasmatematicas.com/numeros/hexadecimales-colores-nombres.html
  // #FF0099 = Rosa intenso
  // #0000FF = Azul
       
 Highcharts.setOptions({ colors: ['#990000', '#191970','#CC9933','#FF0099','#0000FF', '#FAFF00','#FFFFFF','#0094FF','#99FF33','#00FF66','#FF66CC','#00CC99','FF3366'] });
  var genero = {
    chart: {
      renderTo: 'grafico',  /* Nombre de tu contenedor*/
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      style: {fontFamily: '\'Roboto\', \'Lucida Sans Unicode\', Verdana, Arial, Helvetica, sans-serif'}
    },
    title: {
      text: 'Países con mayor población en Sudamérica'   /* Cambialo por el nombre de tus etiquetas*/
    },
    tooltip: {
      formatter: function() {
        return '<b>'+ this.point.name +'</b>: '+  Highcharts.numberFormat(this.percentage, 2) +' %';
      }
    },                                  
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
            color: '#000000',
            connectorColor: '#000000',
            formatter: function() {
              return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';
            }
          }
        }
      },
      series: [{
                  type: 'pie',
                  name: '',
                  data: []
              }]
   }

   $.getJSON('php/poblacion.php', {}, function(json) {
     genero.series[0].data = json;
     chart = new Highcharts.Chart(genero);
   });
          
});       