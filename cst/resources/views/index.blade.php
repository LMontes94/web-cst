<!--
Author: W3layouts
Author URL: http://w3layouts.com12
-->
@extends('layouts.landing')
<!-- banner section -->

@section('content')
<section id="home" class="w3l-banner py-5">
    <div class="banner-content">
        <div class="container py-4">
            <div class="row align-items-center pt-sm-5 pt-4">
                <div class="title">
                    <h3 class="mb-lg-4 mb-3">Colegio Santa Teresita del Niño Jesús</h3>
                    <p class="banner-sub">“Caminando en comunidad, para sembrar la esperanza”</p>
                </div>

            </div>
        </div>
        <div class="row align-items-center pt-sm-5 pt-4">
            <div class="col-md-11 text-md-end">
                <a href="https://www.instagram.com/colegiostateresita/" class="btn ig btn-style" target="_blank"><img src="./images/instagram.png" alt="ig-icon"></a>
                <a href="https://web.handing.co/pre-login" class="btn btn-style" target="_blank">Handing</a>
            </div>
        </div>
    </div>
</section>

<!-- home image with content block -->
<section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
    <div class="container pb-md-5 pb-4">
        <div class="row pb-xl-5 align-items-center">
            <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                <div class="position-relative">
                    <img src="assets/images/img1.jpg" alt="" class="img-fluid radius-image">
                </div>
                <div class="imginfo__box">
                    <h6 class="imginfo__title">Nombre del sector de la img</h6>
                    <p>Breve descrpcion<br> sit aspernatur aut odit aut fugit. </p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                <h3 class="title-style">Descubre Quiénes Somos:</h3>
                <h5 class="subtitle">Una Mirada a Nuestra Institución</h5>
                <p class="mt-4">La historia de la Fundación Hermanas de San José de Puy comienza en 1650 en Lyon,
                    Francia. En 1882, llegan a Argentina y fundan en San Gerónimo Norte, Santa Fé. A lo largo de los
                    años, se destacan hitos como la apertura del Colegio Santa Teresita del Niño Jesús en 1932, la
                    construcción de nuevas instalaciones y la evolución del plan de estudios. En 1990, se completa
                    la transferencia al Obispado de San Isidro, marcando un nuevo capítulo en su compromiso
                    educativo.</p>
                <p class="mt-4">Guiamos a nuestros estudiantes con valores como respeto, integridad y empatía,
                    promoviendo su desarrollo integral en lo espiritual, intelectual, emocional, ético, cívico,
                    social, estético y físico, desde una perspectiva cristiana.</p>

                <a href="contact.html" class="btn btn-style mt-5">Leer Más</a>
            </div>
        </div>
    </div>
</section>
<!-- //home image with content block -->

<!-- courses section -->
<div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
    <div class="container py-md-5 py-4">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style">Nuestros Niveles</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="coursecard-single">
                    <div class="grids5-info position-relative">
                        <img src="assets/images/c1.jpg" alt="" class="img-fluid" />
                        <div class="meta-list">
                            <a href="{{route('inicial')}}">Inicial</a>
                        </div>
                    </div>
                    <div class="content-main-top">
                        <h4><a href="{{route('inicial')}}">Nivel Inicial</a></h4>
                        <p>La infancia se construye en tiempos pequeños y es el momento de los aprendizajes más
                            significativos.</p>
                        <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                            <h6></h6>
                            <a class="btn btn-style-primary" href="{{route('inicial')}}">Leer Más<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="coursecard-single">
                    <div class="grids5-info position-relative">
                        <img src="assets/images/c2.jpg" alt="" class="img-fluid" />
                        <div class="meta-list">
                            <a href="{{route('primaria')}}" class="sec-2">Primaria</a>
                        </div>
                    </div>
                    <div class="content-main-top">
                        <h4><a href="{{route('primaria')}}">Nivel Primario</a></h4>
                        <p>Nuestra propuesta apunta al desarrollo integral de los alumnos para que puedan lograr
                            confianza y autonomía.</p>
                        <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                            <h6></h6>
                            <a class="btn btn-style-primary" href="{{route('primaria')}}">Leer Más<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="coursecard-single">
                    <div class="grids5-info position-relative">
                        <img src="assets/images/c3.jpg" alt="" class="img-fluid" />
                        <div class="meta-list">
                            <a href="{{route('secundaria')}}" class="sec-3">Secundaria</a>
                        </div>
                    </div>
                    <div class="content-main-top">
                        <h4><a href="{{route('secundaria')}}">Nivel Secundario</a></h4>
                        <p>Buscamos fomentar en nuestros alumnos el pensamiento y la reflexión, el espíritu de
                            trabajo y el deseo de saber.</p>
                        <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                            <h6></h6>
                            <a class="btn btn-style-primary" href="{{route('secundaria')}}">Leer Más<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-sm-5 mt-4 pt-sm-0 pt-1">
            <a class="btn btn-style btn-style-secondary mt-sm-3" href="levels.php">
                Mas info</a>
        </div>
    </div>
</div>
<!-- //courses section -->

<!-- why choose block -->
<section class="w3l-service-1 py-5">
    <div class="container py-md-5 py-4">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style">Explora Nuestras Opciones Educativas y Recreativas</h3>
        </div>
        <div class="row content23-col-2 text-center">
            <div class="col-md-6">
                <div class="content23-grid content23-grid1">
                    <h4><a href="about.html">Inglés</a></h4>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="content23-grid content23-grid2">
                    <h4><a href="about.html">Ateneo</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //why choose block -->

<!-- blog block -->
<div class="w3l-blog-block-5 py-5" id="blog">
    <div class="container py-md-5 py-4">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style">Últimas <span>Novedades</span></h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-single">
                    <div class="grids5-info">
                        <a href="#blog"><img src="assets/images/blog2.jpg" alt="" /></a>
                        <div class="blog-info">
                            <h4><a href="#blog">Education Programs...</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                officia deserunt.</p>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                    <img class="img-fluid" src="assets/images/testi2.jpg" alt="admin" style="max-width:40px"> <span class="small ms-2">Eetey Cruis</span>
                                </a>
                                <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Oct 06, 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="blog-card-single">
                    <div class="grids5-info">
                        <a href="#blog"><img src="assets/images/blog1.jpg" alt="" /></a>
                        <div class="blog-info">
                            <h4><a href="#blog">Games Programs...</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                officia deserunt.</p>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                    <img class="img-fluid" src="assets/images/testi1.jpg" alt="admin" style="max-width:40px"> <span class="small ms-2">Molive Joe</span>
                                </a>
                                <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Oct 10, 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="blog-card-single">
                    <div class="grids5-info">
                        <a href="#blog"><img src="assets/images/blog3.jpg" alt="" /></a>
                        <div class="blog-info">
                            <h4><a href="#blog">Articles Programs...</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                                officia deserunt.</p>
                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                    <img class="img-fluid" src="assets/images/testi3.jpg" alt="admin" style="max-width:40px"> <span class="small ms-2">Turne Leo
                                    </span>
                                </a>
                                <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Oct 12, 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //blog block -->
@endsection