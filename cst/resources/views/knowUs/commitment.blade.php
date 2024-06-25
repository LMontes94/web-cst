@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Decálogo de Compromiso')
@slot('link1Text','Conocenos')
@slot('link1Url',route('index'))
@slot('link2Text','Compromiso')

@endcomponent
<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Decálogo de Compromiso del Equipo de Conducción</h3>
    </div>
    <div class="container py-md-5 py-4">
        <div class="row">
            @include('layouts._partials.menus.left-menu-about')
    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>
                    Partiendo de nuestra definición institucional nos comprometemos a gestionar y liderar nuestro
                    proyecto educativo en forma profesional desplegando no sólo complejas habilidades de escucha e
                    intervención, sino y, fundamentalmente, la capacidad de estar en el aquí y ahora, mirando
                    desde el pasado e imaginando el futuro.
                    Nos comprometemos a ser garantes del cumplimiento de nuestra propuesta teniendo en cuenta los
                    siguientes aspectos:
                </p>
                <ul class="points">
                    <li>La cultura compartida que custodia sus señas de identidad</li>
                    <li>El modo de gestionar el contexto institucional y social de manera tal que permita a la
                        institución alzarse sobre sus circunstancias.</li>
                    <li>La cultura del cuidado siendo una escuela protectora que busque garantizar buenas prácticas y ejercer políticas de
                        cuidado.</li>
                    <li>El cumplimiento del rol y el compromiso de liderazgo directivo.</li>
                    <li>La capacitación técnico didáctica continua.</li>
                    <li>La gestión técnico-pedagógica focalizada en la superación y avance de todos nuestros estudiantes.</li>
                    <li>La creación de canales constantes y consensuados de comunicación donde los progenitores
                        puedan estar al tanto de los avances de sus hijos como así también de eventuales dificultades..</li>
                    <li>La importancia de la alianza escuela-familia.</li>
                    <li>La promoción de un clima de convivencia y respeto, de escucha y prevención.</li>
                    <li>La creación de condiciones y oportunidades para que todos nuestros alumnos experimenten
                        trayectorias educativas valiosas, cuidadas y significativas.</li>
                </ul>
            </div>
        </section>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style-letter.css')}}">
@endsection