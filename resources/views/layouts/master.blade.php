<html>
<head>
    <title>@yield('title')</title>

    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assetcss/datepicker3.css" rel="stylesheet">
    <link href="asset/css/styles.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>

<body>
<div class="container">
    @yield('content')
</div>
<script src="/asset/js/jquery-1.11.1.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>
<script src="/asset/js/chart.min.js"></script>
<script src="/asset/js/chart-data.js"></script>
<script src="/asset/js/easypiechart.js"></script>
<script src="/asset/js/easypiechart-data.js"></script>
<script src="/asset/js/bootstrap-datepicker.js"></script>
<script src="/asset/js/custom.js"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>
<footer></footer>
</html>