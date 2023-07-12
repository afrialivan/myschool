<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My School</title>
    <link rel="stylesheet" href="{{ $title === 'home' ? '' : '../' }}assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ $title === 'home' ? '' : '../' }}assets/css/lineicons.css" />
    <link rel="stylesheet" href="{{ $title === 'home' ? '' : '../' }}assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ $title === 'home' ? '' : '../' }}assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ $title === 'home' ? '' : '../' }}assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ $title === 'home' ? '' : '../' }}assets/css/main.css" />
</head>

<body>

    @include('partials.sidenav')
    <main class="main-wrapper">
        @include('partials.header')
        @yield('container')
        @include('partials.footer')
    </main>


    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/Chart.min.js"></script>
    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/dynamic-pie-chart.js"></script>
    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/moment.min.js"></script>
    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/fullcalendar.js"></script>
    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/jvectormap.min.js"></script>
    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/world-merc.js"></script>
    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/polyfill.js"></script>
    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/main.js"></script>
    <script src="{{ $title === 'home' ? '' : '../' }}assets/js/jsbede.js"></script>
    <script src="https://kit.fontawesome.com/c404e6b6cb.js" crossorigin="anonymous"></script>
</body>

</html>
