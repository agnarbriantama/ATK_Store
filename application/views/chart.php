<!DOCTYPE html>
<html>

<head>
    <!-- Load file plugin Chart.js -->
    <script src="<?php echo base_url() ?>/assets/chart/Chart.js"></script>
</head>

<body>
    <br>
    <canvas id="myChart"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $jenis_kelamin = "";
    $jumlah = null;
    foreach ($hasil as $item) {
        $jk = $item->jenis_kelamin;
        $jenis_kelamin .= "'$jk'" . ", ";
        $jum = $item->total;
        $jumlah .= "$jum" . ", ";
    }
    ?>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                labels: [<?php echo $jenis_kelamin; ?>],
                datasets: [{
                    label: 'Data Jenis Kelamin User ',
                    backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)'],
                    borderColor: ['rgb(255, 99, 132)'],
                    data: [<?php echo $jumlah; ?>]
                }]
            },
            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>