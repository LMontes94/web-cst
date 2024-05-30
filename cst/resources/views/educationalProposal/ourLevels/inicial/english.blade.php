@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Inglés')
@slot('link1Text','Nivel Inicial')
@slot('link1Url',route('inicial'))
@slot('link2Text','Inglés')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Inglés en el Nivel Inicial</h3>
    </div>
    @include('layouts._partials.menus.menu-inicial')
    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <p>
                    Sabemos que nuestra sección de Kindergarten es la primera etapa en la trayectoria escolar de
                    nuestros alumnos. La reconocemos como única y determinante en sus historias personales y 
                    fundante para el futuro de sus aprendizajes.
                </p>
                <p>
                    Es por ello que ofrecemos un <strong>curriculum basado en unidades temáticas que articulan la 
                    segunda lengua</strong> con actividades físicas, artísticas, de música, dramatización y ciencias 
                    para estimular al máximo las potencialidades de cada uno de nuestros alumnos. 
                </p>
                <ul class="points">
                    <li>Procuramos crear un ámbito alegre y contenedor que les permita trabajar libre y 
                        confiadamente, estimulándolos a explorar, formular hipótesis, comprobarlas y 
                        reformularlas de ser necesario.</li>
                    <li>Facilitamos situaciones que los estimulen a utilizar lúdicamente los conocimientos 
                        adquiridos y a la segunda lengua como medio de comunicación de sus ideas.</li>
                    <li>Creamos escenarios que les permitan explorar las múltiples posibilidades de 
                        investigación y descubrimiento del maravilloso mundo que los rodea.</li>
                </ul>
                <h5>"El secreto de la genialidad es el de conservera el espíritu del niño (...) y nunca perder el entusiasmo"</h5>
                <h5>Aldous Huxley</h5>
                <h5>Objetivos Principales</h5>
                <ul class="points">
                    <li>Ofrecer una educación bilingüe logrando el desarrollo integral del alumno.</li>
                    <li>Crear las condiciones de aprendizaje apropiadas para que el alumno construya, modifique, 
                        enriquezca y diversifique sus esquemas de conocimiento.</li>
                    <li>Desarrollar al máximo el potencial individual basándose en expectativas altas pero alcanzables.</li>
                </ul>
                <h5>Importancia de un curriculum bilingüe</h5>
                <ul class="points">
                    <li>El alumno logra desarrollar en la segunda lengua y con alto grado de competencia las cuatro habilidades lingüísticas básicas: lectura , comunicación oral , escritura y escucha activa.</li>
                    <li>El alumno logra adquirir una quinta habilidad: competencia cognitiva que permite usar ambas lenguas para razonar o deliberar. </li>
                    <li>Integración curricular de objetivos y contenidos</li>
                    <li>Impacto del Inglés como lengua global</li>
                    <li>Certificaciones externas</li>
                    <li>Integración del curriculum entre programas nacionales e internacionales</li>
                    <li>Transversalidad en uso de la lengua extranjera</li>
                    <li>Transversalidad en el uso de TICs</li>
                </ul>
                <h5>Nivel Inicial</h5>
                <ul class="points">
                    <li>A partir de sala de 3 años</li>
                    <li>El curriculum promueve el desarrollo cognitivo, físico y socio-emocional de cada uno de sus niños.</li>
                    <li>Tiene como punto de partida las experiencias previas de los niños sobre las cuales construirán los futuros aprendizajes interactuando permanentemente con el medio y el grupo.</li>
                    <li>Ofrece amplias oportunidades para explorar, observar, descubrir, y experimentar en las diferentes áreas del conocimiento, como así también la posibilidad de desarrollar su capacidad de reflexión, creación y comunicación.</li>
                    <li>Los niños se inician en la nueva lengua a través de canciones, rimas, cuentos y poemas. El programa se complementa con actividades de dramatización, estimulando la creatividad y la autoestima de los niños. </li>
                    <li>Los alumnos entran al mundo de la lectura y de la escritura a través de una gran variedad de actividades organizadas en unidades temáticas que responden a los intereses de los niños. </li>
                    <li>Este programa bilingüe brinda una base sólida para continuar los aprendizajes en E.P.B. </li>
                </ul>

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