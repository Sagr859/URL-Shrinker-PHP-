$(document).ready(function () {
    var id = localStorage.getItem('id');
    $.ajax({
        url: "analysis.php?id="+id,
        type: "GET",
        success: function (data) {
            console.log(data)
            var url = [];
            var count = [];
            var dataObj = JSON.parse(data);
            for (var i of dataObj){
               url.push("" + i.l_url.substr(1, 15));
               count.push(i.c);
            }
            console.log(url)
            console.log(count)
            var chartdata = {
                labels: url,
                datasets: [
                    {
                        label: "Visits per Hour",
                        fill: false,
                        lineTension: 0.3,
                        backgroundColor: chartColors.green,
                        borderColor: chartColors.green,
                        pointHoverBackgroundColor: chartColors.green,
                        pointHoverBorderColor: chartColors.green,
                        hoverBackgroundColor: chartColors.gold,
                        data: count,
                        yAxisID: "y-axis-1"
                    }
                ]
            };
            var ctx = $("#myChart");
            var LineGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata,
                options: {
                    title: {
                        display: true,
                        text: '',
                        maintainAspectRatio: false,
                        fontColor: chartColors.green
                    },
                    responsive: true,
                    scales: {
                        /*xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: ''
                            }
                        }],*/
                        yAxes: [{
                            ticks:{ beginAtZero: true},
                            type: "linear",
                            display: true,
                            position: "left",
                            id: "y-axis-1",
                            scaleLabel: {
                                display: false,
                                labelString: 'count'
                            }
                        }]
                    }
                }
            });
        },
        error: function (dataObj) {
        }
    });
});
window.chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    gold: 'rgb(248,193,28)',
    grey: 'rgb(201, 203, 207)'
};