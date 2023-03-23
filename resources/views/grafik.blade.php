<!DOCTYPE html>
<html>

<head>
    <title>Chart</title>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
</head>

<body>
    <canvas id="myChart"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/grafik',
                dataType: 'json',
                success: function(data) {
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: data.map(function(d) { return d.date }),
                            datasets: [{
                                label: 'Total Order',
                                data: data.map(function(d) { return d.total }),
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>