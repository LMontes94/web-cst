@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/secundariappal.jpg')
@slot('pageTitle','Régimen Académico')
@slot('link1Text','Nivel Secundario')
@slot('link1Url',route('secundaria'))
@slot('link2Text','Normativas')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Régimen Académico</h3>
    </div>
    @include('layouts._partials.menus.menu-secundaria')

    <!-- Columna derecha -->
    <div class="col-md-7">
        <section class="w3l-team-13 py-5" id="team">
            <div class="container py-md-5 py-4">
                <h5>ASISTENCIA Y PUNTUALIDAD:</h5>
                <ul class="points">
                    <li>Cómputo: Institucionalmente y por materia (sólo cuando excede el límite de inasistencias permitidas, no debe superar el 15% del total de clases dictadas).</li>
                    <li>Total: 20 (veinte).</li>
                </ul>
                <h6>Forma de computar las inasistencias institucionales:</h6>
                <ul class="points">
                    <li>Un solo turno: 1 inasistencia</li>
                    <li>Turno y contraturno: ½ inasistencia por turno</li>
                    <li>Retraso de hasta 15 min: ¼ inasistencia</li>
                    <li>Retiro anticipado: ½ inasistencia</li>
                </ul>
                <p>Las inasistencias serán comunicadas a los padres por cualquier medio de notificación fehaciente.</p>
                <p><strong>A las 10 inasistencias</strong> Notificar al adulto responsable</p>
                <p><strong>A las 20 inasistencias</strong> Citación del adulto responsable. Puede solicitar 8 inasistencias más ante <strong>situaciones excepcionales y debidamente justificadas</strong></p>
                <p>
                    El estudiante que excede el límite de inasistencias en la o las materias debe seguir concurriendo, con las mismas obligaciones escolares. Deberá acreditarlas ante comisión evaluadora en las instancias de diciembre, febrero y marzo.
                </p>
                <h5>JUSTIFICACIÓN </h5>
                <p>Inasistencias por enfermedad: mediante certificado médico o nota firmada del adulto responsable si el causal es pasajero.</p>
                <p>A los estudiantes que integran delegaciones deportivas se les justificarán las inasistencias por esta causa y no afectarán a la promoción (Ley Nacional del Deporte).</p>
                <h5>EVALUACIÓN, ACREDITACIÓN Y CALIFICACIÓN</h5>
                <ul class="points">
                    <li>El Ciclo Lectivo se divide en 3 trimestres.</li>
                    <li>La calificación trimestral surgirá del promedio de las notas parciales y se expresa en números enteros. Cuando el promedio no resulte un número entero, la nota numérica se aproximará a su valor superior si el decimal iguala o supera los 50 centésimos, en caso contrario se establece por defecto el número entero inmediato inferior.</li>
                    <li>La evaluación integradora se promedia con la calificación del 3º trimestre.</li>
                    <li>La calificación final será el promedio de las trimestrales, sin redondear.</li>
                </ul>
                <h5>ACREDITACIÓN</h5>
                <ul class="points">
                    <li>Promedio anual de 7 o más puntos.</li>
                    <li>Calificación en todos los trimestres.</li>
                    <li>Al menos 4 puntos en el último trimestre.</li>
                    <li>Los estudiantes que no acrediten deberán concurrir al Período de Orientación y Apoyo.</li>
                    <li>Dos instancias de evaluación: Diciembre y Febrero/Marzo.</li>
                </ul>
                <h5>PROMOCIÓN:</h5>
                <p>Serán promocionados al año inmediatamente superior todos aquellos que adeuden hasta 2 materias de cualquiera de los años de nivel secundario.</p>
                <h5>COMISIÓN EVALUADORA ADICIONAL</h5>
                <p>Alumnos con 3 materias pendientes de acreditación.</p>
                <p>Pueden solicitar una única mesa adicional en marzo, cumpliendo las siguientes condiciones:</p>
                <ul class="points">
                    <li>El presidente será el profesor de la materia.</li>
                    <li>Se evaluarán los contenidos desarrollados durante el ciclo lectivo.</li>
                    <li>La evaluación será escrita, siendo la instancia oral y/o práctica para aquellos casos donde la naturaleza de la materia lo requiera.</li>
                    <li>Se aprueba con 4 puntos o más.</li>
                    <li>Los estudiantes y los adultos responsables serán informados sobre las características de la evaluación.</li>
                </ul>
                <h5>EVALUACIÓN INTEGRADORA</h5>
                <ul class="points">
                    <li>La calificación será numérica según una escala de 1 a 10 puntos y se expresarán en números naturales</li>
                    <li>Se dispondrá de una nueva instancia de evaluación para los estudiantes que hubieran estado ausentes (inasistencia fehacientemente justificada).</li>
                    <li>Su calificación debe promediarse con el promedio de notas del tercer trimestre.</li>
                    <li>Oportunamente se darán a conocer las asignaturas seleccionadas por la Dipregep para ser evaluadas.</li>
                </ul>
                <h5>Documentos</h5>
                <p><a href="{{asset('assets/documents/secundaria/Regimen_academico.pdf')}}" target="_blank">Descargue el Régimen Académico</a></p>
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