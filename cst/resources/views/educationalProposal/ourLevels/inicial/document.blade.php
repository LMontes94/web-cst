@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Documentos Inicial')
@slot('link1Text','Nivel Inicial')
@slot('link1Url',route('inicial'))
@slot('link2Text','Documentos')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Documentos Inicial</h3>
    </div>
    <div class="container py-md-5 py-4">
        <div class="row">
            @include('layouts._partials.menus.menu-inicial')
            <!-- Columna derecha -->
            <div class="col-md-7">
                <section class="w3l-team-13 py-5" id="team">
                    <div class="container py-md-5 py-4">

                        <a href="{{asset('assets/documents/inicial/Ficha_individual.pdf')}}" target="_blank">
                            <h5>Ficha Individual</h5>
                        </a>
                        <a href="{{asset('assets/documents/inicial/Ficha_de_salud.pdf')}}" target="_blank">
                            <h5>Ficha de Salud</h5>
                        </a>
                        <a href="{{asset('assets/documents/inicial/NI_Reglamento2023.pdf')}}" target="_blank">
                            <h5>Reglamento Interno 2023 Nivel Inicial</h5>
                        </a>
                        <a href="{{asset('assets/documents/inicial/Autorizacion_Transporte_Escolar.pdf')}}" target="_blank">
                            <h5>Autorización Transporte Escolar</h5>
                        </a>
                </section>
            </div>
        </div>

    </div>

</div>
@if($latestPosts->isNotEmpty())
@component('_components.blog-block', [
'title' => 'Últimas Novedades ',
'highlight' => '- Nivel Inicial',
'latestPosts' => $latestPosts,
'route' => route('all-posts-inicial'),
'text'=>'Ver todas las novedades de Inicial'])
@endcomponent
@endif
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style-letter.css')}}">
@endsection