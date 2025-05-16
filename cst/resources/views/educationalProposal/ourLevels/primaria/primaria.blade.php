@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/primariappal.jpg')
@slot('pageTitle','Nivel Primario')
@slot('link1Text','Nuestros Niveles')
@slot('link1Url',route('levels'))
@slot('link2Text','Primaria')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Nivel Primario</h3>
    </div>
    @include('layouts._partials.menus.menu-primaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <h5>Nuestra propuesta apunta al desarrollo integral de los alumnos para que puedan lograr
                    confianza y autonomía.</h5>
                <p>
                    Nuestra propuesta apunta a que nuestros alumnos se desarrollen en un ambiente propicio para
                    que crezcan en confianza y autonomía. Acompañamos y guiamos a los niños y niñas en su proceso de descubrimiento y apropiación de nuevos conocimientos, habilidades, valores y actitudes en el marco de un proceso constructivista.
                </p>
                <p>
                    Fomentamos un clima de trabajo colaborativo, donde el aprendizaje es en forma conjunta y
                    aprenden unos de otros. Procuramos lograr clases dinámicas en las cuales se valore y
                    promueva el espíritu crítico, la participación, el intercambio de ideas, la
                    responsabilidad, el desarrollo del pensamiento científico, el respeto a los demás,
                    los hábitos de estudio y de organización.</p>
                <p>
                    Fomentamos un clima de trabajo colaborativo, donde el aprendizaje es en forma conjunta
                    y aprenden unos de otros. Procuramos lograr clases dinámicas en las cuales se valore y
                    promueva el espíritu crítico, la participación, el intercambio de ideas, la
                    responsabilidad, el desarrollo del pensamiento científico, el respeto a los demás,
                    los hábitos de estudio y de organización.
                <p>
                    Buscando una sana convivencia, trabajamos la disciplina desde la reflexión y la
                    reparación de los actos, fomentando el autocontrol y la apropiación de habilidades
                    tanto socioemocionales como comunicacionales a través del Proyecto institucional de
                    Educación Emocional.
                </p>

                <div class="album-videos-embebidos"><!--h5 class="titulo-biblioteca">Videoteca externa</h5><ul class="recursos-home"--><!--li class="foto-album"--><!--h2 class="titulo-documento">Nivel Primario 2023</h2--><iframe src="https://player.vimeo.com/video/828038995?h=64308a24a7" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <p><a href="https://vimeo.com/828038995">Video Institucional - Educaci&oacute;n Primaria 2023</a> from <a href="https://vimeo.com/colegiostateresita">Colegio Santa Teresita</a> on <a href="https://vimeo.com">Vimeo</a>.</p><!--/li-->
                    <div class="clr"></div>
                </div>
        </section>
    </div>
</div>
</div>
</div>
@if($latestPosts->isNotEmpty())
@component('_components.blog-block', [
'title' => 'Últimas Novedades ',
'highlight' => '- Nivel Primaria',
'latestPosts' => $latestPosts,
'route' => route('all-posts-primaria'),
'text'=>'Ver todas las novedades de Primaria'])
@endcomponent
@endif

@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style-letter.css')}}">
@endsection