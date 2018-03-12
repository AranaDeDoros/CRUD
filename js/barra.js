$(document).ready(function() {
  //default
    //http://www.disfrutalasmatematicas.com/numeros/hexadecimales-colores-nombres.html
       
  // #009900  = VERDE
  Highcharts.setOptions({ colors: ['#009900'] });


  var Opciones = {
    chart: {
      renderTo: 'grafico',
      type: 'column'
    },
    title: {    
      text: 'La programación me gusta',
      x: -20 //center
    },
    subtitle: {
      text: '',
      x: -20
    },
    xAxis: {
      categories: []
    },
    yAxis: {
      title: {
        text: 'Porcentaje'
      },
      plotLines: [{
        value: 0,
        width: 1,
        color: '#808080'
      }]
    },
    tooltip: {
      headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
      pointFormat: '<span style="color:{point.color}">{point.name}</span>:<b>{point.y}</b>%<br/>'
    },                                                                           
    plotOpciones: {
      series: {
        borderWidth: 0,
        dataLabels: {
          enabled: true,
          format: '{point.y}'
        }
      }
    },
    legend: {
      layout: 'vertical',
      align: 'right',
      verticalAlign: 'top',
      x: -40,
      y: 100,
      floating: true,
      borderWidth: 1,
      shadow: true
    },
    series: []
  };

    $.getJSON('php/programa.php', {}, function(json) {
      Opciones.xAxis.categories = json[0]['data']; //xAxis: {categories: []}
      Opciones.series[0] = json[1];                        
      chart = new Highcharts.Chart(Opciones);
    });
});       