@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Muestras de trabajos')
@slot('link1Text','Nivel Secundario')
@slot('link1Url',route('secundaria'))
@slot('link2Text','Muestras')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Muestras de trabajos y salidas de representación</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>Las muestras de trabajo tienen por finalidad presentar a la comunidad lo que se realiza dentro de las aulas mediante la exposición de producciones propias de cada año y de cada modalidad del bachillerato.</p>
                <p>Las salidas de representación procuran la participación de nuestros alumnos en torneos, olimpíadas, prácticas y competencias que ponen en acción sus habilidades físicas e intelectuales.</p>
                <p>Con estas actividades estrechamos los vínculos con nuestra comunidad, favoreciendo la cohesión y los nexos entre los jóvenes, la sociedad y el mundo.</p>
                <p>
                    Realizamos:
                </p>
                <ul class="points">
                    <li>Ferias de Ciencias Naturales.</li>
                    <li>Microemprendimientos de Economía con dimensión solidaria.</li>
                    <li>Presentación de los proyectos de investigación de Ciencias Naturales.</li>
                    <li>Muestras permanentes de trabajos, efemérides y proyectos, en las carteleras del sector secundario y recepción.</li>
                    <li>Muestras de Arte rotativas en las galerías y pasillos.</li>
                    <li>Producción de la revista “1602”</li>
                    <li>Producción y emisión del programa radial de 5º año Comunicación.</li>
                    <li>Expo – Comunicación.</li>
                </ul>
                <p>
                    Nuestros alumnos participan en:
                </p>
                <h6>
                    Prácticas
                </h6>
                <ul class="points">
                  <li>De laboratorio para alumnos de 6º año Naturales.</li>
                  <li>De video para los alumnos de 6º año Comunicación.</li>
                  <li>Contables para los alumnos de 6º año Economía.</li>
                  <li>De radio: radio abierta desde FM zonal y prácticas de locución en actos y eventos escolares, para los alumnos de 5º año Comunicación. </li>
                  <li>De audio</li>
                  <li>Biblioteca</li>
                  <li>En Preceptoría</li>                
                </ul>
                <h6>
                    Olimpíadas
                </h6>
                <ul class="points">
                    <li>Participación en Olimpíada de Radio organizada por la Universidad de Belgrano (UB).</li>
                    <li>Participación en Olimpíada contable organizada por la Universidad del Centro de Estudios Macroeconómicos de Argentina (UCEMA).</li>
                    <li>Participación en Olimpíada contable organizada por la Universidad Católica Argentina (UCA).</li>
                </ul>
                <h6>
                    Ayudantía
                </h6>
                <ul class="points">
                    <li>En retiros espirituales para los alumnos de 5º y 6º año.</li>
                </ul>
                <h6>
                    Torneos Deportivos Internos
                </h6>
                <ul class="points">
                    <li>Intercursos</li>
                    <li>Intercolores.</li>
                </ul>
                <h6>
                    Torneos Intercolegiales
                </h6>
                <ul class="points">
                    <li>Fútbol</li>
                    <li>Handball</li>
                    <li>Vóley</li>
                </ul>
                <h6>
                    Fiesta de la Educación Física
                </h6>
                <h6>
                    Exhibiciones de gimnasia
                </h6>
                <h6>
                    Torneos Bonaerenses:
                </h6>
                <ul class="points">
                    <li>Fútbol</li>
                    <li>Handball</li>
                    <li>Vóley</li>
                </ul>
                <h6>
                    Concursos Literarios:
                </h6>
                <ul class="points">
                    <li>Organizado por la Universidad de la Marina Mercante.</li>
                    <li>Intercolegial.</li>
                </ul>
                <h6>Maratón de lectura - Fundación Leer</h6>
                <h6>Concurso Internacional de Arte (Japón)</h6>
                <h6>Parlamento de la juventud - Municipalidad de Vicente López</h6>
                <h6>Festival de bandas musicales</h6>
                <h6>Café literario - filosófico</h6>
                <h6>Desayuno literario</h6>
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