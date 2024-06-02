<!-- header -->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('index')}}"><img src="{{asset('assets/img/escudo/Escudo-CST-sinFondo.ico')}}" alt="escudo">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="conocenosDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Conocenos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="conocenosDropdown">
                            <a class="dropdown-item" href="{{route('staff')}}">Equipo Directivo</a>
                            <a class="dropdown-item" href="{{route('general-letter')}}">Carta de la directora general</a>
                            <a class="dropdown-item" href="{{route('definition')}}">Definición Institucional</a>
                            <a class="dropdown-item" href="{{route('history')}}">Historia</a>
                            <a class="dropdown-item" href="about.php">Instalaciones</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="propuestaDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Propuesta Educativa
                        </a>
                        <div class="dropdown-menu" aria-labelledby="propuestaDropdown">
                            <a class="dropdown-item" href="{{route('levels')}}">Nuestros Niveles</a>
                            <a class="dropdown-item" href="courses.php">Proyecto Educativo</a>
                            <a class="dropdown-item" href="#">Pastoral</a>
                            <a class="dropdown-item" href="{{route('english')}}">Inglés</a>
                            <a class="dropdown-item" href="{{route('ateneo')}}">Ateneo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('admission') }}">Postulaciones 2025</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                    </li>
                </ul>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!-- //header -->