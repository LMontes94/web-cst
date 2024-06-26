@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Documentos Primario')
@slot('link1Text','Nivel Primario')
@slot('link1Url',route('primaria'))
@slot('link2Text','Documentos')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Documentos Primario</h3>
    </div>
    @include('layouts._partials.menus.menu-inicial')
    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <ul class="points">
                    <li>
                        <a href="{{asset('assets/documents/primaria/libros_y_materiales.pdf')}}" target="_blank">
                            <h5>Libros de Verano y Lista de Materiales - EP</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('assets/documents/primaria/autorizacion_EP.pdf')}}" target="_blank">
                            <h5>Autorización Transporte Escolar</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('assets/documents/primaria/Ficha_individual.pdf')}}" target="_blank">
                            <h5>Ficha Individual</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('assets/documents/primaria/Ficha_salud.pdf')}}" target="_blank">
                            <h5>Ficha de Salud</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('assets/documents/primaria/Reglamento_EP.pdf')}}" target="_blank">
                            <h5>Reglamento Interno 2023 Nivel Primario</h5>
                            /a>
                    </li>
                    <li>
                        <a href="{{asset('assets/documents/primaria/Autorizacion_Retirarse_Solos_EP.pdf')}}" target="_blank">
                            <h5>Autorización Salida Solos</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('assets/documents/primaria/Autorizacion_campo_deporte_1er_ciclo.pdf')}}" target="_blank">
                            <h5>Autorización Campo de Deportes (1er Ciclo)</h5>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('assets/documents/primaria/Autorizacion_campo_deportes_2do_ciclo.pdf')}}" target="_blank">
                            <h5>Autorización Campo de Deportes (2do Ciclo)</h5>
                        </a>
                    </li>
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