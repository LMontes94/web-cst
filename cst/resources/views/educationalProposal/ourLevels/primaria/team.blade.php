@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/primariappal.jpg')
@slot('pageTitle','Equipos de trabajo')
@slot('link1Text','Nivel Primario')
@slot('link1Url',route('primaria'))
@slot('link2Text','Equipo')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Equipos de trabajo</h3>
    </div>
    @include('layouts._partials.menus.menu-primaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <h5>Directivos:</h5>
                <ul class="points">
                    <li>Directora de Educación Primaria</li>
                    <li>Vicedirectora de Educación Primaria</li>
                    <li>Coordinadora de Inglés</li>
                </ul>
                <h5>Docentes tutores y catequistas por año</h5>
                <h5>Jornada Completa - Equipos Castellano e Inglés:</h5>
                <ul class="points">
                    <li>Docente</li>
                    <li>Docente auxiliar </li>
                    <li>Equipo de Pastoral</li>
                    <li>Secretarias</li>
                    <li>Docentes de materias especiales</li>
                </ul>
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