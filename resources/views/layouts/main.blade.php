<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My School</title>
    <link rel="stylesheet"
        href="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/css/lineicons.css" />
    <link rel="stylesheet"
        href="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet"
        href="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/css/fullcalendar.css" />
    <link rel="stylesheet"
        href="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/css/main.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

    @include('partials.sidenav-home')
    <main class="main-wrapper">
        @include('partials.header')
        @yield('container')
        @include('partials.footer')
    </main>


    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/Chart.min.js"></script>
    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/dynamic-pie-chart.js"></script>
    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/moment.min.js"></script>
    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/fullcalendar.js"></script>
    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/jvectormap.min.js"></script>
    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/world-merc.js"></script>
    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/polyfill.js"></script>
    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/main.js"></script>
    <script src="{{ $title === 'home' && $title === 'Kelas' ? '' : '../' }}assets/js/jsbede.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

    @yield('js')
</body>

</html>
