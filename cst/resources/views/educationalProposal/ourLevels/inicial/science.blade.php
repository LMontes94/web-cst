@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/jardinppal.jpg')
@slot('pageTitle','Las Ciencias Naturales')
@slot('link1Text','Nivel Inicial')
@slot('link1Url',route('inicial'))
@slot('link2Text','Ciencias')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Las Ciencias Naturales en Nivel Inicial</h3>
    </div>
    <div class="container py-md-5 py-4">
        <div class="row">
            @include('layouts._partials.menus.menu-inicial')
            <!-- Columna derecha -->
            <div class="col-md-7">
                <section class="w3l-team-13 py-5" id="team">
                    <div class="container py-md-5 py-4">
                        <p>
                            Desde muy pequeños podemos observar que los niños demandan conocimientos vinculados con el
                            área de las ciencias naturales, interactúan con numerosos fenómenos naturales y en mayor o
                            menor medida con productos de la ciencia y la tecnología. Descubrimos su inagotable
                            curiosidad, su interés por explorar y conocer los fenómenos naturales. La enseñanza de las ciencias los ayudará a conocer y comprender los fenómenos de la naturaleza, la estructura de su cuerpo, sus posibilidades, sus cambios, aprenderán a cuidarse.
                        </p>

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