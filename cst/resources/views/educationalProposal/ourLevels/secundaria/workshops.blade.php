@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/secundariappal.jpg')
@slot('pageTitle','Talleres de cuidado de la vida')
@slot('link1Text','Nivel Secundario')
@slot('link1Url',route('secundaria'))
@slot('link2Text','Talleres')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Talleres de cuidado de la vida</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>
                    <strong>"…Caminemos juntos todos, cuidémonos los unos a los otros, cuídense entre ustedes, no se hagan daño, cuídense la vida, cuiden la familia, cuiden a los niños, cuiden a los viejos, que no haya odio, que no haya pelea, dejen de lado la envidia, dialoguen entre ustedes, que este deseo de cuidarse vaya creciendo en el corazón y acérquense a Dios."</strong>
                </p>
                <h5>Papa Francisco</h5>
                <p>
                    Los talleres de cuidado de la vida están destinados a padres y alumnos.
                </p>
                <p>
                    Estos espacios de reflexión y prevención son organizados por la dirección con el acompañamiento del equipo de pastoral y de orientación, y están a cargo de profesionales especialistas y de los profesores de las materias afines.
                </p>
                <p>
                    Proponemos los talleres de:
                </p>
                <ul class="points">
                    <li>Educación vial.</li>
                    <li>Prevención de adicciones.</li>
                    <li>Trastornos alimentarios.</li>
                    <li>Educación para el amor y la sexualidad.</li>
                    <li>Uso responsable de las nuevas tecnologías.</li>
                </ul>
        </section>
    </div>
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