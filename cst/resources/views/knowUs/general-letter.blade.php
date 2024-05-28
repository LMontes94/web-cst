@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')   
 @slot('pageTitle','Carta de la Directora General')
 @slot('link1Text','Conocenos') 
 @slot('link1Url',route('index'))
 @slot('link2Text','Carta')

@endcomponent
<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Carta de la Directora General</h3>
    </div>
    @include('layouts._partials.menus.left-menu-about')
    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <div class="row text-left left-side">
                    <div class="col-lg-3 col-6">
                        <div class="image-one text-center">
                            <a href="#" data-toggle="modal" data-target="#imageModal">
                                <img src="./assets/images/directivos/MariTaurozzi_thumb-removebg-preview.png" alt="dir-general" class="arrow-png img-responsive historic-photo" />
                                <h4>María Marta</h4>
                                <h4>Taurozzi</h4>
                            </a>
                        </div>

                    </div>
                </div>
                <h6>Querida comunidad educativa:</h6>
                <p>
                    Santa Teresita nos encomendó “trabajar constantemente y dejar que Dios se ocupe del éxito de
                    la tarea”. Bajo esta premisa hemos desarrollado un proyecto educativo en el cual la educación
                    es considerada como un proceso global: no solamente nos esforzamos por ofrecer una educación
                    de excelencia, sino que además tenemos la mirada puesta en nuestros alumnos, de manera de poder
                    educarlos en valores y prepararlos para formar parte de nuestra sociedad.
                </p>
                <p>
                    Nuestro objetivo es que nuestros egresados sean personas críticas, humildes, respetuosas,
                    solidarias; que cuenten con todas las herramientas necesarias para poder desenvolverse en un
                    mundo tan cambiante como en el que vivimos hoy. Para ello contamos con un cuerpo docente
                    multidisciplinar, ávido por continuar capacitándose y alineado con el perfil del colegio.
                </p>
                <p>
                    <strong>“El valor de estar juntos” </strong>es el lema que nos une y que convierte a la
                    comunidad del Santa Teresita en una gran familia. Le hemos asignado a la palabra valor su doble
                    acepción: valor porque es valiosísimo y valor porque amerita ser valiente para asumir
                    responsablemente el desafío sagrado que nos ha sido encomendado, que es el de enseñar.
                    Cuando hablamos de enseñar no me refiero sólo a la parte académica, con su innegable peso
                    en esta ecuación, sino a enseñar a ser mejores personas iluminadas por las enseñanzas
                    evangélicas.
                </p>
                <p>
                    Para poder llevar a cabo esta desafiante misión les proponemos y animamos a hacer que en esta
                    escuela se visibilice <strong>el valor de estar juntos</strong>, siendo:
                </p>
                <ul class="points">
                    <li>una <strong>escuela pesebre</strong> que vea en el otro una presencia sagrada a descubrir, que no juzgue
                        ni critique, sino que cobije, ampare a todos por igual e incluya…</li>
                    <li>una <strong>escuela samaritana</strong> que sea capaz de acercarse y acompañar en su camino a todos los que la transitan…</li>
                    <li>una <strong>escuela profeta</strong> que profetice la solidaridad y el amor cristiano...</li>
                    <li>una <strong>escuela proyectada</strong> que sueña y se interpela acerca de su lugar en el proyecto de Jesús.</li>
                </ul>
                <p>
                    En un mundo lleno de incertidumbres hay que ser muy valiente para poder cumplir con lo
                    planteado. Pero somos valientes, somos apasionados, y estamos juntos.
                </p>
            </div>
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