@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/secundariappal.jpg')
@slot('pageTitle','Equipos de trabajo')
@slot('link1Text','Nivel Secundario')
@slot('link1Url',route('secundaria'))
@slot('link2Text','Equipo')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Equipos de trabajo</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>
                    Todos los alumnos participan de la elección de dos delegados de cada curso. Estos representantes se reúnen con un miembro del Equipo de Orientación Escolar y con el Equipo Directivo de Secundaria conformando así el Consejo de Alumnos.
                </p>
                <p>Es un espacio de ejercitación de la ciudadanía activa enmarcada en la visión de este colegio; donde se fomenta el diálogo, la tolerancia al discenso y la práctica de estrategias para resolver conflictos y el respeto por los acuerdos logrados.</p>
                <p>En este sentido se llevan adelante actividades educativas, vinculadas con la totalidad de la vida escolar: recreación, articulación con la comunidad, elaboración de propuestas para actos, jornadas, celebraciones, misión pastoral, entre otras.</p>
        </section>
    </div>
</div>

</div>

</div>
@if($latestPosts->isNotEmpty())
@component('_components.blog-block', [
'title' => 'Últimas Novedades ',
'highlight' => '- Nivel Secundaria',
'latestPosts' => $latestPosts,
'route' => route('all-posts-primaria'),
'text'=>'Ver todas las novedades de Secundaria'])
@endcomponent
@endif
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style-letter.css')}}">
@endsection