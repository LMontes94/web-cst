@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/colegio.jpg')
@slot('pageTitle','Historia')
@slot('link1Text','Conocenos')
@slot('link1Url',route('index'))
@slot('link2Text','Historia')

@endcomponent
<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Historia</h3>
    </div>
    <div class="container py-md-5 py-4">
        <div class="row">
            @include('layouts._partials.menus.left-menu-about')
            <!-- Columna derecha -->
            <div class="col-md-7">
                <section class="w3l-team-13 py-5" id="team">
                    <div class="container py-md-5 py-4">
                        <div class="row text-left left-side">
                            <ul class="historia-lista">
                                <li><strong>1650</strong> Fundación Hermanas de San José de Puy en Lyon, Francia.</li>
                                <li><strong>1882</strong> Llegada a la Argentina y primera fundación - San Gerónimo Norte (Santa Fé)
                                    Noviciado en Buenos Aires (Gurruchaga 1040).</li>
                                <li><strong>1927</strong> Compran un terreno para el nuevo noviciado en Vicente López</li>
                                <li><strong>1932</strong> Inauguración del Noviciado.</li>
                                <li><strong>1932</strong> Marzo - Apertura Colegio Santa Teresita del Niño Jesús -
                                    Primer ciclo lectivo con 128 alumnas
                                    Hermana María Emilia Cornut primera directora.
                                </li>
                                <li><strong>1935</strong> Comienza el Colegio Secundario y las obras de la Capilla</li>
                                <li><strong>1969</strong>Nuevo sector de Primario sobre Roca y Gral. Paz -
                                    Nuevo plan de estudios en el nivel secundario: Bachiller Nacional y Perito Mercantil
                                </li>
                                <li><strong>1977</strong> Construcción del Gimnasio y Microcine donde estaba la añosa arboleda.</li>
                                <li><strong>1985</strong> El colegio ya cuenta con 21 secciones de Primaria, 19 de Secundaria:
                                    10 de Bachiller en el Turno Mañana y 9 de Perito Mercantil en el Turno Tarde.</li>
                                <li><strong>1986</strong>La Congregación comienza un proceso de transferencia al Obispado de San Isidro
                                    que se completa en 1990.</li>
                                <li><strong>1991</strong> La Capilla pasa a ser sede Parroquial de María Inmaculada y desde 1998 Parroquia.
                                    1992 Nuevos planes de estudio en el Nivel Secudario: Bachiller con salida Laboral en
                                    Medios de Comunicación Social y Perito Mercantil con Orientación en Computación.</li>
                                <li><strong>1994</strong> Incorporación gradual de varones</li>
                                <li><strong>1995</strong> Apertura del Jardín Maternal de 2 años</li>
                                <li><strong>2001</strong> Polimodal en Comunicación, Arte y Diseño; Economía y Gestión de las Organizaciones
                                    y Ciencias Naturales</li>
                                <li><strong>2004</strong> Comienzo de la primera escuela de inglés en nivel primario “Litlle Flowers School of
                                    English”.</li>
                                <li><strong>2006</strong> Transformación Ley Nacional de Educación: Bachilleratos en Economía y
                                    Administración, Ciencias Naturales y Comunicación.</li>
                                <li><strong>2006</strong> Comienzo del Plan de estudios Institucional Bilingüe de Doble Jornada.</li>
                                <li><strong>2016</strong> Egreso de la primera promoción de Bachilleres con el International Certificate of
                                    Education de la Universidad de Cambridge.</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style-history.css')}}">
@endsection