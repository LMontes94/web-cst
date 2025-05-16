@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/secundariappal.jpg')
@slot('pageTitle','Educación Física')
@slot('link1Text','Nivel Secundario')
@slot('link1Url',route('secundaria'))
@slot('link2Text','Educación Física')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Educación Física</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>La práctica escolar de la gimnasia y del deporte posibilitan a los adolescentes la toma de conciencia de sí mismos, el aprendizaje motor, sensible y a la vez racional, la formación de hábitos para las prácticas motrices autónomas, y el placer por las actividades ludomotrices en especial deportivas.</p>
                <p>La construcción de acuerdos y la cohesión grupal que resulta del conjunto de estos procesos son aprendizajes que propician en los jóvenes alcanzar saberes necesarios que, vinculados a los de otros espacios curriculares, les permitan encarar su vida futura con seguridad y sentido de pertenencia.</p>
                <p>En nuestro Colegio los alumnos pueden optar por integrar alguno de los siguientes grupos de trabajo:</p>
                <ul class="points">
                    <li>Intercolores</li>
                    <li>Intercursos</li>
                    <li>de Fútbol Reducido, organizado para alumnos del ciclo básico, del ciclo superior y ex alumnos</li>
                    <li>Fiesta de Educación Física</li>
                </ul>
                <p>Con la intención de consolidar y coronar el trabajo realizado durante las clases participamos en torneos y competencias intercolegiales organizados por el Departamento de Educación Física de nuestro Colegio y por Instituciones Educativas de zona norte. Las alumnas de Gimnasia Artística, Rítmica y Aeróbica participan, además, en jornadas, exhibiciones, actos y fiestas de nuestra escuela, desfiles y galas gimnásticas.</p>
                <p>Las actividades del departamento de Educación Física se realizan en las instalaciones del Colegio, del Club Municipalidad de Vicente López (VILO) y del Club Centro Galicia.</p>
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