@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/secundariappal.jpg')
@slot('pageTitle','Salidas y viajes de estudio')
@slot('link1Text','Nivel Secundario')
@slot('link1Url',route('secundaria'))
@slot('link2Text','Salidas')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Salidas pedagógicas y viajes de estudio</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>Proponemos la realización de salidas pedagógicas y de viajes de estudio que complementen el trabajo áulico y que contribuyan a la mejora de la comprensión de contenidos curriculares, y a la optimización y la profundización de los vínculos interpersonales.</p>
                <p>Hemos programado:</p>
                <ul class="points">
                    <li>Salida de campo.</li>
                    <li>Visita al zoológico.</li>
                    <li>Recorrido por el Museo de Ciencias Naturales Bernardino Rivadavia.</li>
                    <li>Visita a la ciudad de La Plata y al Museo de Ciencias Naturales.</li>
                    <li>Salida a La Serenísima y ciudad de Luján.</li>
                    <li>Viaje a Tandil.</li>
                    <li>Viaje a Entre Ríos.</li>
                    <li>Viaje a Córdoba.</li>
                    <li>Viaje a Sierra de la Ventana.</li>
                </ul>
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