<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santa Teresita</title>
    <link rel="icon" href="{{asset('assets/img/escudo/Escudo-CST-sinFondo.ico')}}" type="image/x-icon">
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-navbar.css')}}">
    @yield('styles')
</head>

<body>
    @include('layouts._partials.header')
    @yield('content')
    @include('layouts._partials.footer')

    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>

    <!-- Js scripts -->
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollToTop.js')}}"></script>
    <script src="{{asset('assets/js/theme-change.js')}}"></script>
    <script src="{{asset('assets/js/navFixed.js')}}"></script>
    <script src="{{asset('assets/js/blockScroll.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    @yield('scripts')
</body>

</html>