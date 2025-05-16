@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/secundariappal.jpg')
@slot('pageTitle','Documentos')
@slot('link1Text','Nivel Secundario')
@slot('link1Url',route('secundaria'))
@slot('link2Text','Documentos')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Documentos Secundario</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <ul class="points">
                    <li><a href="{{asset('assets/documents/secundaria/ficha_de_salud.pdf')}}" target="_blank">Ficha Individual</a></li>
                    <li><a href="{{asset('assets/documents/secundaria/ficha_individual.pdf')}}" target="_blank">Ficha de Salud</a></li>
                    <li><a href="{{asset('assets/documents/secundaria/reglamento.pdf')}}" target="_blank">Reglamento Interno Nivel Secundario</a></li>
                    <li><a href="{{asset('assets/documents/secundaria/schoolnet.pdf')}}" target="_blank">Schoolnet para padres</a></li>
                </ul>
            </div>
        </section>
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