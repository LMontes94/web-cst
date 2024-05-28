@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')   
 @slot('pageTitle','Definición Institucional')
 @slot('link1Text','Conocenos') 
 @slot('link1Url',route('index'))
 @slot('link2Text','Institución')

@endcomponent
<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Definición Institucional</h3>
    </div>
    @include('layouts._partials.menus.left-menu-about')
    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>
                    Entendemos la educación como un proceso integral con la mirada puesta en todos y en cada uno
                    de nuestros alumnos en un ambiente emocionalmente significativa e intelectualmente desafiante.
                    Creamos las condiciones para que todo nuestros alumnos gocen de trayectorias educativas
                    cuidadas que respeten sus ritmos y necesidades, donde se les brinden contenidos significativos,
                    que puedan aprender disfrutando del conocimiento y que logren aplicar lo aprendido a nuevas
                    situaciones.
                    Arbitramos todos los medios para que nuestros egresados sean personas críticas, humildes,
                    respetuosas, solidarias; que cuenten con todas las herramientas necesarias para poder
                    desenvolverse en un mundo tan cambiante como en el que vivimos hoy.
                </p>
                <p>
                    Trabajamos incansablemente para ser:
                </p>
                <ul class="points">
                    <li>una escuela pesebre que vea en el otro una presencia sagrada a descubrir, que no juzgue ni
                        critique, sino que cobije, ampare a todos por igual e incluya…</li>
                    <li>una escuela samaritana que sea capaz de acercarse y acompañar en su camino a todos los que
                        la transitan…</li>
                    <li>una escuela profeta que anuncie la solidaridad y el amor cristiano...</li>
                    <li>una escuela proyectada que sueñe y se interpele acerca de su lugar en el proyecto de Jesús.</li>
                </ul>
            </div>
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