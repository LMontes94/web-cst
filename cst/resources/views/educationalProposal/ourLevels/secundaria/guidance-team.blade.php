@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Equipo de orientación escolar')
@slot('link1Text','Nivel Secundario')
@slot('link1Url',route('secundaria'))
@slot('link2Text','Equipo')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Equipo de orientación escolar</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>El equipo de orientación está integrado por un Lic. en Psicología, una Lic. en Psicopedagogía y profesores tutores de cada uno de los cursos.</p>
                <p>Su tarea es acompañar los aprendizajes conociendo a los alumnos de manera integral y orientándolos en el proceso de definir su proyecto de vida.</p>
                <p>El trabajo conjunto con los otros docentes y el diálogo con las familias, son claves para su tarea.</p>
                <p>El Equipo de Orientación Escolar se propone como objetivos:</p>
                <ul class="points">
                    <li>Detectar en forma temprana las situaciones de dificultad en relación al aprendizaje, vínculos sociales, conflictos emocionales y familiares.</li>
                    <li>Realizar las orientaciones pertinentes y el seguimiento de la evolución de dichas situaciones..</li>
                    <li>Acompañar el proceso de adaptación de los alumnos nuevos.</li>
                    <li>Acompañar a los alumnos de 3º año en la elección de la modalidad de la secundaria superior.</li>
                    <li>Orientar a los alumnos de 6º año en la elección de su futuro proyecto vocacional y ocupacional.</li>
                </ul>
                <p>La función primordial del tutor es optimizar en el proceso de enseñanza aprendizaje, la promoción social y personal de cada joven. Para lo cual lleva adelante acciones que apuntan al mejoramiento de las relaciones interpersonales en cada grupo y con los miembros de la comunidad.</p>
                <p>Los integrantes de este equipo son adultos disponibles, capaces de recuperar con atención y profesionalismo la singularidad de cada alumno y cada situación vital. Son el nexo entre padres, alumnos y profesionales.</p>
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