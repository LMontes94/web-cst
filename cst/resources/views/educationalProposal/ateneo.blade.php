@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Ateneo')
@slot('link1Text','Propuesta Educativa')
@slot('link1Url',route('index'))
@slot('link2Text','Ateneo')

@endcomponent
<div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
    <div class="container py-md-5 py-4">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style">Ateneo Santa Teresita</h3>
        </div>
        <div class="container py-md-5 py-4">
            <div class="row">
                @include('layouts._partials.menus.left-menu-about')
                <!-- Columna derecha -->
                <div class="col-md-7">
                    <section class="w3l-team-13 py-5" id="team">
                        <div class="container py-md-5 py-4">
                            <p>
                                A mediados de 1997 nace el Ateneo Santa Teresita, como un espacio abierto a todas las familias de la comunidad, donde cada uno pueda encontrar la manera de satisfacer sus inquietudes en el desarrollo de una actividad particular, enmarcada en una organización que los contenga y acompañe en su crecimiento.
                            </p>
                            <p>
                                Para conocer más acerca de las diferentes actividades que ofrecemos, visitá nuestra Fan Page de Facebook.
                            </p>
                            <h5>CONTACTO</h5>
                            <p><strong>Dirección:</strong> Urquiza 2050, Florida</p>
                            <p><strong>Horario de atención:</strong> lunes a jueves de 16 a 20:30hs</p>
                            <p><strong>Correo electrónico:</strong> santateresitaateneo@gmail.com</p>
                            <p><strong>Teléfono:</strong> (011) 4513-6744</p>
                        </div>
                            <p>¡Conocé más en nuestra página de <a href="https://www.facebook.com/ateneosantateresita/">Facebook AQUÍ</a></p>
                    </section>
                </div>
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