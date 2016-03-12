
​
$(function () {
    $('#container').highcharts({
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Är du Vädersjuk?'
        },
        subtitle: {
            text: 'Källor: SMHI & Försäkringskassan'
        },
        xAxis: [{
            categories: ['Stockholm', 'Visby', 'Karlskrona', 'Göteborg', 'Malmö'],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}°C',
                style: {
                    color: Highcharts.getOptions().colors[2]
                }
            },
            title: {
                text: 'Temperatur',
                style: {
                    color: Highcharts.getOptions().colors[2]
                }
            },
            opposite: true
​
        }, { // Secondary yAxis
            gridLineWidth: 0,
            title: {
                text: 'Nederbörd',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value} mm',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            }
​
        }, { // Tertiary yAxis
            gridLineWidth: 0,
            title: {
                text: 'Sjuktalet',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            labels: {
                format: '{value} dagar',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 80,
            verticalAlign: 'top',
            y: 55,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Nederbörd',
            type: 'column',
            yAxis: 1,
            data: [15.5, 26.3, 10.3, 13.2, 8.0, 14.2],
            tooltip: {
                valueSuffix: ' mm'
            }
​
        }, {
            name: 'Sjuktalet',
            type: 'spline',
            yAxis: 2,
            data: [90, 33, 54, 100, 33, 98],
            marker: {
                enabled: false
            },
            dashStyle: 'shortdot',
            tooltip: {
                valueSuffix: ' dagar'
            }
​
        }, {
            name: 'Temperatur',
            type: 'spline',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5,],
            tooltip: {
                valueSuffix: ' °C'
            }
        }]
    });
});
​
