@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Nivel Secundario')
@slot('link1Text','Nuestros Niveles')
@slot('link1Url',route('levels'))
@slot('link2Text','Secundaria')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Nivel Secundario</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <h5>Buscamos fomentar en nuestros alumnos el pensamiento y la reflexión, el espíritu de
                    trabajo y el deseo de saber.</h5>
                <p>
                    El paso de los estudiantes por el nivel secundario tiene como objetivo primordial el poder fomentar su autonomía y
                    decisión para comenzar a discernir su proyecto de vida con el foco puesto en la fe. Para ello, nuestra propuesta
                    pedagógica ofrece tres modalidades: Economía y Administración, Ciencias Naturales y Comunicación.
                    En cada una de ellas, nuestros alumnos van adquiriendo herramientas y conocimientos que los acercan al mundo profesional
                    y laboral. </p>
                <p>
                    Asimismo, contamos con un equipo de profesionales y profesores tutores que acompañan a los adolescentes a atravesar esta
                    etapa de profundos cambios y autodescubrimiento a través de la escucha activa, el espíritu de colaboración, el respeto y
                    la empatía. De esta manera, nuestros bachilleres egresan de su etapa escolar como jóvenes ciudadanos con capacidad
                    reflexiva y espíritu crítico, habiendo aprehendido habilidades que les permitan desenvolverse con confianza y seguridad
                    frente a los desafíos que propone una sociedad moderna en constante adaptación.</p>
                <p>
                    La educación secundaria del Colegio Santa Teresita del Niño Jesús está organizada en un Ciclo Básico, con áreas y materias
                    comunes y un Ciclo Superior orientado en:</p>
                <h5>Comunicación</h5>
                <p>
                    Esta modalidad permite a los estudiantes interesados por el mundo de la producción de imágenes, de los lenguajes artísticos,
                    la comunicación y la cultura a abrirse a un amplio campo de posibilidades intelectuales y laborales.
                </p>
                <p>
                    Propone una formación orientada hacia el conocimiento y la utilización de las tecnologías, los materiales, los soportes y los
                    procedimientos utilizados en la producción de imágenes verbales y no verbales. Los prepara para acercarse a un vasto
                    territorio de actividades que ya ocupan un lugar fundamental en nuestra sociedad.
                </p>
                <h5>Economía y Administración</h5>
                <p>
                    Esta modalidad se propone formar estudiantes que se inician en el mundo de los conceptos, las técnicas y procedimientos
                    utilizados en los distintos ámbitos organizacionales.
                </p>
                <p>
                    Su formación se vincula a las crecientes demandas del mundo del trabajo, relacionadas con la modernización de las organizaciones
                    públicas o privadas, de producción o de servicios.
                </p>
                <h5>Ciencias Naturales</h5>
                <p>
                    En esta modalidad se focalizan los contenidos referidos a la comprensión e interpretación de los procesos de la naturaleza y de
                    la interacción del ser humano con ella desde una perspectiva multidisciplinaria. Se ejercitan en la comprensión, producción y
                    aplicación del método científico en Ciencias Naturales.
                </p>
                <p>
                    Son promotores del cuidado del medio ambiente y del cuidado de la salud
                </p>

                <div class="album-videos-embebidos"><!--h5 class="titulo-biblioteca">Videoteca externa</h5><ul class="recursos-home"--><!--li class="foto-album"--><!--h2 class="titulo-documento">Nivel Secundario 2023</h2--><iframe src="https://player.vimeo.com/video/828044178?h=261fb802eb" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <p><a href="https://vimeo.com/828044178">Video Institucional - Educaci&oacute;n Secundaria 2023</a> from <a href="https://vimeo.com/colegiostateresita">Colegio Santa Teresita</a> on <a href="https://vimeo.com">Vimeo</a>.</p><!--/li-->
                    <div class="clr"></div>
                </div>
                <h5 class="titulo-biblioteca">Documentos</h5>
                <ul class="recursos-home">
                    <li><a href="https://www.colegiosteresita.edu.ar/admin/upload/docs/TRIPTICO con orientaciones Sec2018.pdf">
                            <h2 class="titulo-documento">Orientaciones del Nivel Secundario</h2>
                        </a>

        </section>
    </div>
</div>

</div>

</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style-letter.css')}}">
@endsection