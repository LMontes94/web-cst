@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Música')
@slot('link1Text','Nivel Inicial')
@slot('link1Url',route('inicial'))
@slot('link2Text','Música')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Música</h3>
    </div>
    @include('layouts._partials.menus.menu-inicial')
    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>
                    En el Nivel Inicial el niño vivencia la música poniendo en juego su esencia y su naturalidad:
                    la voz, el lenguaje, el movimiento corporal y el mundo sonoro que lo rodea. 
                    Explora, experimenta, juega con su voz, con el ritmo de las palabras, con su cuerpo en el 
                    espacio, mientras desarrolla y afianza su musicalidad haciendo música.
                    La música propicia la actitud creadora, la expresión y la comunicación, el desarrollo de las 
                    actitudes de cooperación, el trabajo en equipo y afianza los vínculos sociales, 
                    valorando la sensibilidad para una educación integral. 
                </p>

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