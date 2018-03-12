$(document).ready(function() {

  //http://www.disfrutalasmatematicas.com/numeros/hexadecimales-colores-nombres.html
  // #FF0099 = Rosa intenso
  // #0000FF = Azul
       
 Highcharts.setOptions({ colors: ['#FF0099', '#0000FF'] });
  var genero = {
    chart: {
      renderTo: 'grafico',  /* Nombre de tu contenedor*/
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      style: {fontFamily: '\'Roboto\', \'Lucida Sans Unicode\', Verdana, Arial, Helvetica, sans-serif'}
    },
    title: {
      text: 'Genero'   /* Cambialo por el nombre de tus etiquetas*/
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

   $.getJSON('php/genero.php', {}, function(json) {
     genero.series[0].data = json;
     chart = new Highcharts.Chart(genero);
   });
          
});       