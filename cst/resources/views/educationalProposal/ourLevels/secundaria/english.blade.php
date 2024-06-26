@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Inglés')
@slot('link1Text','Nivel Secundario')
@slot('link1Url',route('secundaria'))
@slot('link2Text','Inglés')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Inglés ES</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>
                    La propuesta para la ES busca profundizar los aprendizajes alcanzados en la EP alentando a nuestros alumnos a valorar tanto la riqueza como la diversidad que brinda la Lengua Inglesa. El amplio curriculum ofrecido tiene como objetivo principal el brindar las herramientas para el desarrollo de competencias para desempeñarse con seguridad en una segunda lengua logrando comunicarse en forma idónea en un mundo globalizado y les permita una mejor inserción en el mundo laboral. Durante la Educación Secundaria Básica se prepara a los alumnos para rendir en 1° Año PET for Schools y FCE for Schools en 3°. En forma paralela se comienza con el cursado de las materias pertenecientes al IGCSE que se rendirán durante la Educación Secundaria Superior.
                </p>
                <p>
                    El Certificado General Internacional de Educación Secundaria (el IGCSE) es un programa curricular de dos años el cual conduce a obtener un certificado que es internacionalmente reconocido. Sus cursos han sido desarrollados en línea con el Currículo Británico Nacional pero teniendo conocimiento de las necesidades de los alumnos en la Comunidad Internacional. El Sindicato Local de Exámenes de la Universidad de Cambridge (UCLES) en Inglaterra administra el IGCSE. En Argentina se administra a través de ESSARP. Se considera que los cursos de IGCSE desarrollan destrezas educativas esenciales, entre las que se cuentan el proceso de recordar conocimientos, y las habilidades de expresión oral, resolución de problemas, el trabajo en equipo y el espíritu de iniciativa e investigación. El IGCSE cubre distintos niveles de competencias y ofrece la posibilidad de elegir entre una currícula básica (core) o extendida (extended) en diversas materias.
                </p>
                <h5>Objetivos Principales</h5>
                <ul class="points">
                    <li>Ofrecer una educación bilingüe logrando el desarrollo integral del alumno.</li>
                    <li>Crear las condiciones de aprendizaje apropiadas para que el alumno construya, modifique, enriquezca y diversifique sus esquemas de conocimiento.</li>
                    <li>Desarrollar al máximo el potencial individual basándose en expectativas altas pero alcanzables .</li>
                </ul>
                <h5>Importancia de un curriculum bilingüe</h5>
                <ul class="points">
                    <li>El alumno logra desarrollar en la segunda lengua y con alto grado de competencia las cuatro habilidades lingüísticas básicas: lectura , comunicación oral , escritura y escucha activa.</li>
                    <li>El alumno logra adquirir una quinta habilidad : competencia cognitiva que permite usar ambas lenguas para razonar o deliberar. (Cummins, 1984)</li>
                    <li>Integración curricular objetivos y contenidos</li>
                    <li>Impacto del Inglés como lengua global</li>
                    <li>Certificaciones externas</li>
                    <li>Integración del curriculum entre programas nacionales e internacionales</li>
                    <li>Transversalidad en uso de la lengua extranjera</li>
                    <li>Transversalidad en el uso de TICs</li>
                </ul>
                <h5>Documentos</h5>
                <ul class="points">
                    <li><a href="{{asset('assets/documents/secundaria/20_anos_de_IGCSE.pdf')}}" target="_blank">Datos de Interés sobre IGCSE</a></li>
                    <li><a href="{{asset('assets/documents/secundaria/IGCSE.pdf')}}" target="_blank">IGCSE</a></li>
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