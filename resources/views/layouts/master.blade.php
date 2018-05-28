<html>
<head>
    <title>@yield('title')</title>

    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/styles.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>

<body>
<div class="container">
    @yield('content')
</div>
{{--<script src="/asset/js/jquery-1.11.1.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>--}}
<script src="/js/js/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/js/js/myapp.js"></script>

</body>
<footer></footer>
</html>