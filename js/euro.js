var options = {
    chart: {
        renderTo: 'grafico',
        type: 'spline',
        marginRight: 130,
        marginBottom: 25
    },
    title: {
        text: 'Precio promedio del euro con respecto al peso Mexicano',
        x: -20 //center
    },
    subtitle: {
        text: '1960-2016',
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
            value: 10,
            width: 1,
            color: '#CC9999'
        }]
    },
    tooltip: {
        formatter: function() {
                return ''+ this.series.name +'-'+this.x +': '+ this.y;
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
    series: [],

}
   
$.getJSON('php/euro.php', function(json) {
    options.xAxis.categories = json[0]['data'];
    options.series[0] = json[1];
    chart = new Highcharts.Chart(options);
});