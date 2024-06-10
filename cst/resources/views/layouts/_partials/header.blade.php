<!-- header -->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">

            @include('_components.escudo')
            @include('_components.button-burger')

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                    @component('_components.nav-item-dropdown', ['dropdownId' => 'conocenosDropdown', 'title' => 'Conocenos'])
                    <a class="dropdown-item" href="{{route('staff')}}">Equipo Directivo</a>
                    <a class="dropdown-item" href="{{route('general-letter')}}">Carta de la directora general</a>
                    <a class="dropdown-item" href="{{route('definition')}}">Definición Institucional</a>
                    <a class="dropdown-item" href="{{route('history')}}">Historia</a>
                    <a class="dropdown-item" href="about.php">Instalaciones</a>
                    @endcomponent

                    @component('_components.nav-item-dropdown', ['dropdownId' => 'propuestaDropdown', 'title' => 'Propuesta Educativa'])
                    <a class="dropdown-item" href="{{route('levels')}}">Nuestros Niveles</a>
                    <a class="dropdown-item" href="courses.php">Proyecto Educativo</a>
                    <a class="dropdown-item" href="#">Pastoral</a>
                    <a class="dropdown-item" href="{{route('english')}}">Inglés</a>
                    <a class="dropdown-item" href="{{route('ateneo')}}">Ateneo</a>
                    @endcomponent

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('admission') }}">Postulaciones 2025</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                    </li>
                </ul>
                @include('_components.change-background')
        </nav>
    </div>
</header>
<!-- //header -->