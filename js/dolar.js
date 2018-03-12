var options = {
    chart: {
        renderTo: 'grafico',
        type: 'spline',
        marginRight: 130,
        marginBottom: 25
    },
    title: {
        text: 'Precio promedio del dólar con respecto al peso Mexicano',
        x: -20 //center
    },
    subtitle: {
        text: '',
        x: -20
    },
    xAxis: {
        title: {
          text: 'Fecha'
        },
        categories: []
    },
    yAxis: {
        title: {
            text: 'Pesos'
        },
        plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
        }]
    },
    tooltip: {
        formatter: function() {
                return ''+ this.series.name +''+this.x +': '+ this.y;
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -10,
        y: 100,
        borderWidth: 0
    },
    series: []
}
   
$.getJSON('php/dolar.php', function(json) {
    options.xAxis.categories = json[0]['data'];
    options.series[0] = json[1];
    chart = new Highcharts.Chart(options);
});