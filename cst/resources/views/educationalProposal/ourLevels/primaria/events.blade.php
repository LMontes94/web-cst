@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Eventos y salidas')
@slot('link1Text','Nivel Primario')
@slot('link1Url',route('primaria'))
@slot('link2Text','Eventos')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Eventos, Muestras de trabajos y Salidas Pedagógicas</h3>
    </div>
    @include('layouts._partials.menus.menu-primaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>
                    Es nuestro objetivo generar espacios de encuentros con las familias y la comunidad en torno a las distintas expresiones que los alumnos puedan desarrollar.
                </p>
                <p>
                    Los actos escolares merecen un tiempo de construcción de la idea de patria y libertad en el marco de la expresión plástica, artística, corporal y literaria. Se desarrollan proyectos en torno a las efemérides patrias con la realización de videos, exposiciones, producciones diversas.
                </p>
                <p>
                    La lectura y la escritura impulsan varias actividades que culminan en Feria del Libro; Concurso Literario Intercolegial; Maratón de lectura propiciado por la Fundación Leer; Encuentros con escritores; Chocolatada Literaria; jornada especial del día del libro; escritura de la Revista Literaria de la Educación Primaria, entre otros. Contamos con la participación de las familias para la concreción de una escuela abierta a la comunidad.
                </p>
                <p>Las producciones de los alumnos quedan plasmadas en muestras permanentes de expresión artística, literaria, de investigación en galerías y pasillos expuestas en carteleras interactivas que invitan al resto del alumnado a sumarse con opiniones y respuestas a esas presentaciones.</p>
                <p>Además, se realizan experiencias directas con grupos teatrales y de títeres que visitan el colegio, y los niños y niñas concurren también, como propuestas específicas en el contexto de proyectos pedagógicos planificados por sus docentes y profesores especiales.</p>
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