@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Inglés')
@slot('link1Text','Nivel Primario')
@slot('link1Url',route('primaria'))
@slot('link2Text','Inglés')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Inglés EP</h3>
    </div>
    @include('layouts._partials.menus.menu-primaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>
                    La propuesta para la EP se basa principalmente en un currículo totalmente integrado
                    utilizando material didáctico que permita el diseño de unidades temáticas donde se
                    abordarán los distintos contenidos bajo un mismo eje conductor, el trabajo en proyecto
                    y la evaluación formativa, sumativa y la auto-evaluación. Buscamos que nuestros alumnos,
                    valiéndose de una segunda lengua, consigan una comprensión integral para alcanzar un
                    aprendizaje significativo que les permita entender mejor el mundo en el que viven,
                    actuar con independencia y asumir sus responsabilidades.
                </p>
                <p>
                    Siguiendo la filosofía de nuestro Colegio nos centramos en el desarrollo completo del niño,
                    tanto en el aula como en otros entornos en los que el niño puede aprender.
                    Ofrecemos un marco que satisface las diversas necesidades de los niños: académicas,
                    sociales, físicas, emocionales y culturales. A nivel académico preparamos a nuestros
                    alumnos desde los primeros años a experimentar con el idioma como una forma de comunicación.
                    Durante los años de Jardín los chicos aprenden a expresarse en inglés a través del juego y
                    la interacción en clase .
                    A medida que van creciendo van desarrollando las diferentes habilidades lingüísticas con
                    la ayuda de material didáctico variado siempre teniendo en cuenta el nivel cognitivo de
                    nuestros alumnos fomentando que la experiencia del aprendizaje sea positiva y
                    estimulante.
                </p>
                <h5>Objetivos Principales</h5>
                <ul class="points">
                    <li>Ofrecer una educación bilingüe logrando el desarrollo integral del alumno.</li>
                    <li>Crear las condiciones de aprendizaje apropiadas para que el alumno construya, modifique, enriquezca y diversifique sus esquemas de conocimiento.</li>
                    <li>Desarrollar al máximo el potencial individual basándose en expectativas altas pero alcanzables.</li>
                </ul>
                <h5>Importancia de un curriculum bilingüe</h5>
                <ul class="points">
                    <li>El alumno logra desarrollar en la segunda lengua y con alto grado de competencia las cuatro habilidades lingüísticas básicas: lectura, comunicación oral, escritura y escucha activa.</li>
                    <li>El alumno logra adquirir una quinta habilidad: competencia cognitiva que permite usar ambas lenguas para razonar o deliberar. (Cummins,1984) </li>
                    <li>Integración curricular objetivos y contenidos</li>
                    <li>Impacto del Inglés como lengua global</li>
                    <li>Certificaciones externas</li>
                    <li>Integración del curriculum entre programas nacionales e internacionales</li>
                    <li>Transversalidad en uso de la lengua extranjera</li>
                    <li>Transversalidad en el uso de TICs</li>
                </ul>
                <h5>Materias Especiales:</h5>
                <ul class="points">
                    <li>Drama</li>
                    <li>Music</li>
                    <li>Arts & Crafts</li>
                    <li>Physical Education </li>
                </ul>
                <h5>Exámenes Internacionales de la Universidad de Cambridge: Young Learners English (YLE)</h5>
                <p>
                    Son exámenes de inglés especialmente diseñados para niños y preadolescentes, cuyo objetivo es motivar y reconocer los logros alcanzados en relación con el aprendizaje del idioma.
                </p>
                <p>
                    Los exámenes son de diseño muy atractivo, lo que despierta en los alumnos el deseo de completarlos. Son integrales, ya que evalúan las cuatro habilidades. Son elaborados y calificados en Inglaterra por profesionales especializados en evaluación lingüística y enseñanza de inglés.
                </p>
                <ul class="points">
                    <li>Starters: 3rd Form</li>
                    <li>Movers: 4th Form</li>
                    <li>Flyers: 5th Form</li>
                    <li>KET (Key English Test): 6th Form </li>
                </ul>
                <h5>Actividades Complementarias</h5>
                <ul class="points">
                    <li>Clases abiertas para las familias</li>
                    <li>School Fair</li>
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