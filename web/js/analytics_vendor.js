var OdisAnalyticsVendorCharts = function () {
    var chart_bubble_income = function (data) {
        Highcharts.chart('chart_bubble_income', {

            chart: {
                type: 'bubble',
                plotBorderWidth: 1,
                zoomType: 'xy'
            },

            legend: {
                enabled: false
            },

            title: {
                text: 'Sugar and fat intake per country'
            },

            subtitle: {
                text: 'Source: <a href="http://www.euromonitor.com/">Euromonitor</a> and <a href="https://data.oecd.org/">OECD</a>'
            },

            xAxis: {
                gridLineWidth: 1,
                title: {
                    text: 'Daily fat intake'
                },
                labels: {
                    format: '{value} gr'
                },
                plotLines: [{
                        color: 'black',
                        dashStyle: 'dot',
                        width: 2,
                        value: 65,
                        label: {
                            rotation: 0,
                            y: 15,
                            style: {
                                fontStyle: 'italic'
                            },
                            text: 'Safe fat intake 65g/day'
                        },
                        zIndex: 3
                    }]
            },

            yAxis: {
                startOnTick: false,
                endOnTick: false,
                title: {
                    text: 'Daily sugar intake'
                },
                labels: {
                    format: '{value} gr'
                },
                maxPadding: 0.2,
                plotLines: [{
                        color: 'black',
                        dashStyle: 'dot',
                        width: 2,
                        value: 50,
                        label: {
                            align: 'right',
                            style: {
                                fontStyle: 'italic'
                            },
                            text: 'Safe sugar intake 50g/day',
                            x: -10
                        },
                        zIndex: 3
                    }]
            },

            tooltip: {
                useHTML: true,
                headerFormat: '<table>',
                pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
                        '<tr><th>Fat intake:</th><td>{point.x}g</td></tr>' +
                        '<tr><th>Sugar intake:</th><td>{point.y}g</td></tr>' +
                        '<tr><th>Obesity (adults):</th><td>{point.z}%</td></tr>',
                footerFormat: '</table>',
                followPointer: true
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },

            series: [{
                    data: [
                        {x: 95, y: 95, z: 13.8, name: 'BE', country: 'Belgium'},
                        {x: 86.5, y: 102.9, z: 14.7, name: 'DE', country: 'Germany'},
                        {x: 80.8, y: 91.5, z: 15.8, name: 'FI', country: 'Finland'},
                        {x: 80.4, y: 102.5, z: 12, name: 'NL', country: 'Netherlands'},
                        {x: 80.3, y: 86.1, z: 11.8, name: 'SE', country: 'Sweden'},
                        {x: 78.4, y: 70.1, z: 16.6, name: 'ES', country: 'Spain'},
                        {x: 74.2, y: 68.5, z: 14.5, name: 'FR', country: 'France'},
                        {x: 73.5, y: 83.1, z: 10, name: 'NO', country: 'Norway'},
                        {x: 71, y: 93.2, z: 24.7, name: 'UK', country: 'United Kingdom'},
                        {x: 69.2, y: 57.6, z: 10.4, name: 'IT', country: 'Italy'},
                        {x: 68.6, y: 20, z: 16, name: 'RU', country: 'Russia'},
                        {x: 65.5, y: 126.4, z: 35.3, name: 'US', country: 'United States'},
                        {x: 65.4, y: 50.8, z: 28.5, name: 'HU', country: 'Hungary'},
                        {x: 63.4, y: 51.8, z: 15.4, name: 'PT', country: 'Portugal'},
                        {x: 64, y: 82.9, z: 31.3, name: 'NZ', country: 'New Zealand'}
                    ]
                }]

        });



    };
    var chart_pie_income = function (data) {
        // Build the chart
        Highcharts.chart('chart_pie_income', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares January, 2015 to May, 2015'
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
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Microsoft Internet Explorer',
                    y: 56.33
                }, {
                    name: 'Chrome',
                    y: 24.03,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Firefox',
                    y: 10.38
                }, {
                    name: 'Safari',
                    y: 4.77
                }, {
                    name: 'Opera',
                    y: 0.91
                }, {
                    name: 'Proprietary or Undetectable',
                    y: 0.2
                }]
            }]
        });
    };
    var chart_bar_AFF = function (data) {
        Highcharts.chart('chart_bar_AFF', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Historic World Population by Region'
            },
            subtitle: {
                text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
            },
            xAxis: {
                categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Year 1800',
                data: [107, 31, 635, 203, 2]
            }, {
                name: 'Year 1900',
                data: [133, 156, 947, 408, 6]
            }, {
                name: 'Year 2012',
                data: [1052, 954, 4250, 740, 38]
            }]
        });
    };
    var chart_donut_config = function (data) {
        Highcharts.chart('chart_donut_config', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: 0,
                plotShadow: false
            },
            title: {
                text: 'Browser<br>shares<br>2015',
                align: 'center',
                verticalAlign: 'middle',
                y: 40
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        enabled: true,
                        distance: -50,
                        style: {
                            fontWeight: 'bold',
                            color: 'white'
                        }
                    },
                    startAngle: -90,
                    endAngle: 90,
                    center: ['50%', '75%']
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                innerSize: '50%',
                data: [
                    ['Firefox',   10.38],
                    ['IE',       56.33],
                    ['Chrome', 24.03],
                    ['Safari',    4.77],
                    ['Opera',     0.91],
                    {
                        name: 'Proprietary or Undetectable',
                        y: 0.2,
                        dataLabels: {
                            enabled: false
                        }
                    }
                ]
            }]
        });
    }
    return {
        //main function to initiate the module
        init: function (data) {
            chart_bubble_income(data);
            chart_pie_income(data);
            chart_bar_AFF(data);
            chart_donut_config(data);
        }

    };

}();




