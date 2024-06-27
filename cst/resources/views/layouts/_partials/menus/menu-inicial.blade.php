<!-- Columna izquierda -->
<div class="col-md-5 ps-lg-5 mt-md-0 mt-5 menu-principal">
    <div class="contact-left">
        <div class="cont-details d-none d-md-block">
            <div class="d-flex contact-grid">
                <div class="menu-title">
                    <a href="{{route('inicial')}}">
                        <h3>Nivel Inicial</h3>
                    </a>
                </div>
            </div>
            <div class="d-flex contact-grid mt-4 pt-lg-4">
                <div class="menu-options">
                    <a href="{{route('inicial-science')}}">
                        <h4>Las Ciencias Naturales en Nivel Inicial</h4>
                    </a>
                </div>
            </div>
            <div class="d-flex contact-grid mt-4 pt-lg-4">
                <div class="menu-options">
                    <a href="{{route('inicial-physical')}}">
                        <h4>La Educación Física en Nivel Inicial</h4>
                    </a>
                </div>
            </div>
            <div class="d-flex contact-grid mt-4 pt-lg-4">
                <div class="menu-options">
                    <a href="{{route('inicial-music')}}">
                        <h4>Música</h4>
                    </a>
                </div>
            </div>
            <div class="d-flex contact-grid mt-4 pt-lg-4">
                <div class="menu-options">
                    <a href="{{route('inicial-english')}}">
                        <h4>Inglés en el Nivel Inicial</h4>
                    </a>
                </div>
            </div>
            <div class="d-flex contact-grid mt-4 pt-lg-4">
                <div class="menu-options">
                    <a href="{{route('inicial-document')}}">
                        <h4>Documentos</h4>
                    </a>
                </div>
            </div>
            <div class="d-flex contact-grid mt-4 pt-lg-4">
                <div class="menu-options">
                    <a href="commitment.php">
                        <h4>Actividades</h4>
                    </a>
                </div>
            </div>
        </div>

        <!-- Dropdown Menu for Mobile -->
        <div class="d-block d-md-none">
            <div class="dropdown mt-4 pt-lg-4">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Menú Inicial
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('inicial-science')}}">Las Ciencias Naturales en Nivel Inicial</a></li>
                    <li><a class="dropdown-item" href="{{route('inicial-physical')}}">La Educación Física en Nivel Inicial</a></li>
                    <li><a class="dropdown-item" href="{{route('inicial-music')}}">Música</a></li>
                    <li><a class="dropdown-item" href="{{route('inicial-english')}}">Inglés en el Nivel Inicial</a></li>
                    <li><a class="dropdown-item" href="{{route('inicial-document')}}">Documentos</a></li>
                    <li><a class="dropdown-item" href="commitment.php">Actividades</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>