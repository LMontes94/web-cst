@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Nivel Inicial')
@slot('link1Text','Nuestros Niveles')
@slot('link1Url',route('levels'))
@slot('link2Text','Inicial')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Nivel Inicial</h3>
    </div>
    <div class="container py-md-5 py-4">
        <div class="row">
            @include('layouts._partials.menus.menu-inicial')
            <!-- Columna derecha -->
            <div class="col-md-7">
                <section class="w3l-team-13 py-5" id="team">
                    <div class="container py-md-5 py-4">
                        <h5>La infancia se construye en tiempos pequeños y es el momento de los aprendizajes más significativos.</h5>
                        <p>
                            El transcurso de niños y niñas por el nivel inicial es un momento único para fomentar su
                            desarrollo biológico, psicológico, cultural y social.
                        </p>
                        <p>
                            El jardín brinda la oportunidad de vivir nuevas experiencias y desafíos a través de
                            propuestas que ponen la curiosidad innata y las necesidades infantiles en el centro, respetando siempre la diversidad, los ritmos y tiempos de cada uno. Creemos en el aprendizaje en libertad, sin prisa, porque sabemos que, con el acompañamiento adecuado, todo llega a su tiempo.
                        </p>
                        <p>
                            Nuestra propuesta es que, a través del juego, los niños y niñas puedan ir adquiriendo
                            saberes de las diferentes áreas de aprendizaje. Organizamos la propuesta pedagógica en
                            unidades temáticas y secuencias didácticas, fomentando el trabajo basado en proyectos, para
                            de esta manera atravesar las distintas áreas de enseñanza y los ejes de la ESI.</p>
                        <p>
                            Buscamos favorecer en cada uno de nuestros alumnos el desarrollo de la propia identidad, la confianza y seguridad en sus capacidades, la autonomía, el cuidado del medio ambiente y la interacción con
                            otros.
                        </p>
                        <p>
                            Es nuestro compromiso el poder brindar una educación de calidad basándonos en valores, como
                            la cooperación, el respeto, la escucha, el compartir y la solidaridad, que consideramos
                            importantísimos en la vida de nuestra comunidad.
                        </p>
                        <h4>Información General</h4>
                        <h5>Sala de 2 años:</h5>
                        <ul class="points">
                            <li>Jornada Simple: 7:30 a 12:20 hs.</li>
                            <li>Turno Tarde: 12:30 a 17:15 hs. (esta opción se habilitará en función de la demanda que haya)</li>
                            <li>¡Nueva Sala de 2 con Jornada Completa en 2024! 7:30 a 16:15 hs.</li>
                        </ul>
                        <h5>Sala de 3 años:</h5>
                        <ul class="points">
                            <li>Turno Mañana: 7:30 a 12:15 hs.</li>
                            <li>Jornada Completa: 7:30 a 16:20 hs.</li>
                        </ul>
                        <h5>Sala de 4 y 5 años:</h5>
                        <ul class="points">
                            <li>Jornada Completa: 7:30 a 16:30 hs. </li>
                        </ul>
                        <h5>Areas curriculares:</h5>
                        <ul class="points">
                            <li>Juego</li>
                            <li>Formación Personal y Social</li>
                            <li>Matemática</li>
                            <li>Prácticas del Lenguaje</li>
                            <li>Ambiente Natural y Socialo</li>
                            <li>Educación Artística</li>
                            <li>Educación Física</li>
                            <li>Educación Digital, Programación y Robótica</li>
                        </ul>
                    </div>
                    <h4>​Ante cualquier consulta o para solicitar más información enviar un mail a:</h4>
                    <h5>secretariainicial@colegiosteresita.edu.ar</h5>
                    <div class="album-videos-embebidos"><!--h5 class="titulo-biblioteca">Videoteca externa</h5><ul class="recursos-home"--><!--li class="foto-album"--><!--h2 class="titulo-documento">Nivel Inicial 2023</h2--><iframe src="https://player.vimeo.com/video/828027354?h=6543e3efec" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        <p><a href="https://vimeo.com/828027354">Video Institucional - Nivel Inicial 2023</a> from <a href="https://vimeo.com/colegiostateresita">Colegio Santa Teresita</a> on <a href="https://vimeo.com">Vimeo</a>.</p><!--/li-->
                        <div class="clr"></div>
                    </div>
                </section>
            </div>
        </div>

    </div>

</div>
<div class="w3l-blog-block-5 py-5" id="blog">
    <div class="container py-md-5 py-4">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style">Últimas Novedades - Nivel Inicial</h3>
        </div>
        <div class="row justify-content-center">
            @foreach($latestPosts as $post)
            @include('_components.card-article', ['post' => $post])
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('all-posts') }}" class="btn btn-primary">Ver todas las novedades</a>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style-letter.css')}}">
@endsection