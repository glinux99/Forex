<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

<body>
    <canvas id="chartJSContainer" width="600" height="400"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-streaming/2.0.0/chartjs-plugin-streaming.js"></script>
</body>
<script>
    var newDataset = {
        label: "Vendas",
        backgroundColor: 'rgba(99, 255, 132, 0.2)',
        borderColor: 'rgba(99, 255, 132, 1)',
        borderWidth: 10,
        data: [20],
    }
    var options = {
        type: 'line',
        data: {
            datasets: [{
                label: '# of Votes',
                data: [],

                borderColor: 'pink'
            }]
        },

        options: {
            scales: {
                x: {
                    type: 'realtime',
                    realtime: {
                        duration: 20000,
                        refresh: 100,
                        delay: 200,
                        onRefresh: chart => {
                            const now = Date.now();
                            chart.data.datasets.forEach(dataset => {
                                //dataset.data.push(addData(mychart, 'SolidJS', 18200));
                                data.datasets.push(newDataset);
                            });
                        }
                    }
                }
            }
        }
    }

    var ctx = document.getElementById('chartJSContainer').getContext('2d');
    var mychart = new Chart(ctx, options);

    function addData(chart, label, data) {
        //chart.data.labels.push(label);
        chart.data.datasets.forEach((dataset) => {
            dataset.data.push({
                x: Date.now(),
                y: Math.random()
            });
        });

        chart.update();
    }
    addData(mychart, 'SolidJS', 18200)
</script>

</html>
