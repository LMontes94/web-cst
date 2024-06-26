@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Inglés')
@slot('link1Text','Propuesta Educativa')
@slot('link1Url',route('index'))
@slot('link2Text','Inglés')

@endcomponent
<div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
  <div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
      <h3 class="title-style">Inglés</h3>
    </div>
    <p>
      El Colegio Santa Teresita del Niño Jesús ha optado desde el año 2006, en su proyecto educativo
      institucional, por un curriculum que ofrece <strong>una formación integral en inglés con acreditaciones
        internacionales brindadas por la Universidad de Cambridge.</strong>
    </p>
    <p>Este plan de estudios certifica:</p>
    <ul class="points">
      <li>Niveles de idioma inglés con las prestigiosas propuestas de la Universidad de Cambridge a través de sus exámenes ESOL (Young Learners y First Certificate) y certificaciones IGCSE.</li>
      <li>Un nivel internacional de aprendizajes del Secundario equivalentes al curriculum europeo, en 7 asignaturas: Arte, Historia, Biología, Matemática, Español, Inglés y Literatura Inglesa.</li>
    </ul>
    <h5>En el Nivel Inicial</h5>
    <p>
      Ingles en el Nivel Inicial es la primera experiencia sistemática que tienen los niños de contacto con la lengua extranjera. Para lograr nuestro objetivo ponemos gran énfasis en crear un ambiente ideal donde el idioma Ingles sea adquirido de forma natural, con un eje central en Storytelling, Drama&Music, and Arts. Este currículum basado en unidades temáticas que articulan la segunda lengua ayudando a estimular al máximo las potencialidades de cada uno de nuestros alumnos.
    </p>
    <h5>En el Nivel Primario</h5>
    <p>La propuesta para la EP se basa principalmente en un currículo totalmente integrado utilizando material didáctico que permita el diseño de unidades temáticas donde se abordarán los distintos contenidos bajo un mismo eje conductor, el trabajo en proyecto y la evaluación formativa, sumativa y la auto-evaluación. </p>
    <p>A partir de 3er grado, los alumnos tienen la posibilidad de rendir los exámenes YLE avalados por la Universidad de Cambridge. Son exámenes de inglés diseñados para niños y preadolescentes, cuyo objetivo es motivar y reconocer los logros alcanzados en relación con el aprendizaje del idioma.
      Cada año, cientos de miles de alumnos en todo el mundo se presentan a rendir estos exámenes. En la Argentina, numerosos colegios y escuelas de idioma ya han incorporado los exámenes YLE a sus programas de estudio con mucho éxito.</p>
    <p>Los exámenes YLE están directamente relacionados con el Marco Común Europeo de Referencia para la lengua y constan de tres niveles: Starters (3er grado), Movers (4to grado) y Flyers (5to grado).
      En los exámenes YLE se evalúa las cuatro habilidades lingüísticas en tres partes: Comprensión lectora, comprensión auditiva y expresión oral. </p>
    <h5>En el Nivel Secundario</h5>
    <p>La propuesta para la ES busca profundizar los aprendizajes alcanzados en la EP alentando a nuestros alumnos a valorar tanto la riqueza como la diversidad que brinda la Lengua Inglesa. El amplio curriculum ofrecido tiene como objetivo principal el brindar las herramientas para el desarrollo de competencias para desempeñarse con seguridad en una segunda lengua logrando comunicarse en forma idónea en un mundo globalizado y les permita una mejor inserción en el mundo laboral.</p>
    <p>A lo largo de los 6 años del Secundario, los estudiantes van logrando los niveles deseados en idioma inglés y en las asignaturas cursadas en dicho idioma, obteniendo –además de su título de Bachiller en la orientación elegida, acreditado por nuestro país- el International Certificate of Education que asegura aprendizajes equivalentes en todo el mundo para los estudios secundarios.</p>
    <h5>Plan de estudios de Lower y Upper Secondary</h5>
    <h5>Objetivos</h5>
    <ul class="points">
      <li>Obtener un título secundario en inglés de valor internacional: ICE (Cambridge International Certificate of Education).</li>
      <li>Desarrollar habilidades cognitivas que permiten un pensamiento crítico, la resolución de problemas, el trabajo en equipo y el espíritu de iniciativa e investigación (fundamentales para el buen desempeño académico y profesional).</li>
      <li>Complementar el currículum del Bachillerato con una certificación final internacional del nivel de aprendizajes logrados en la educación secundaria.</li>
      <li>Desarrollar en la segunda lengua y con alto grado de competencia las cuatro habilidades básicas: lectura, comunicación oral, escrita y escucha activa sumándole el saber disciplinar específico de las asignaturas elegidas.</li>
      <li>Lograr adquirir una quinta habilidad: competencia cognitiva que permite usar ambas lenguas para razonar o deliberar.</li>
    </ul>
    <h5>Certificados a obtener</h5>
    <h5>Internacionales:</h5>
    <ul class="points">
      <li>ICE (Cambridge International Certificate of Education): Es un programa curricular de dos años que conduce a obtener un certificado internacionalmente reconocido. Sus cursos han sido desarrollados en línea con el Currículo Nacional Británico, teniendo conocimiento de las necesidades de los alumnos en la comunidad internacional. Es administrado por UCLES, departamento de exámenes internacionales de la Universidad de Cambridge (cuyo representante en argentina es ESSARP: Asociación académica de escuelas de habla inglesa del Río de la Plata). Para obtener el certificado general el alumno debe acreditar 7 asignaturas del programa.</li>
      <li>FCE for Schools (First Certificate in English): Los alumnos que cursan este plan de estudios también tienen la posibilidad de presentarse al finalizar el 4to año al “First for Schools” de la Universidad de Cambridge. Correspondiente al nivel B2 del Common European Framework of Reference for Languages CEFR.</li>
      <li>Institucional: Independientemente de la presentación a las distintitas asignaturas y a su aprobación, el Colegio Santa Teresita del Niño Jesús entrega un Certificado Analítico General de estudios en idioma inglés en el que consta las asignaturas cursadas y aprobadas en los 6 años de Educación Secundaria.</li>
    </ul>
    <h5>Organigrama del Plan de estudios</h5>
    <div class="container mt-5">
      <!-- Header -->
      <div class="row table-header text-center py-2">
        <div class="col-md-2">Lower Secondary</div>
        <div class="col-md-5">Asignaturas</div>
        <div class="col-md-2">Upper Secondary</div>
        <div class="col-md-3">Asignaturas</div>
      </div>

      <!-- Row 1 -->
      <div class="row table-row py-2">
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">1st</div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
          <ul>
            <li>English</li>
            <li>Science</li>
            <li>Literature</li>
            <li>Social Studies</li>
            <li>Art and Design</li>
          </ul>
        </div>
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">4th</div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <ul>
            <li>English</li>
            <li>Biology</li>
            <li>Literature</li>
            <li>Mathematics</li>
            <li>History</li>
            <li>Art and Design</li>
          </ul>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="row table-row py-2">
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">2nd</div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
          <ul>
            <li>English</li>
            <li>Science</li>
            <li>Literature</li>
            <li>Social Studies</li>
            <li>Art and Design</li>
          </ul>
        </div>
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">5th</div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <ul>
            <li>English</li>
            <li>Biology</li>
            <li>Literature</li>
            <li>Mathematics</li>
            <li>History</li>
            <li>Art and Design</li>
          </ul>
        </div>
      </div>

      <!-- Row 3 -->
      <div class="row table-row py-2">
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">3rd</div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
          <ul>
            <li>English</li>
            <li>Science</li>
            <li>Literature</li>
            <li>Social Studies</li>
            <li>Art and Design</li>
          </ul>
        </div>
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">6th</div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <ul>
            <li>English</li>
            <li>Literature</li>
            <li>History</li>
            <li>Spanish as a first Language</li>
            <li>English as a first Language</li>
          </ul>
        </div>
      </div>
      <div class="row table-header text-center py-2">
        <h4>Exámenes</h4>
      </div>

      <!-- Row 1 Examen -->
      <div class="row table-row py-2">
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">1st</div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
          <ul>
            <li>FCE for Schools</li>
          </ul>
        </div>
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">4th</div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <ul>
            <li>FCE for Schools</li>
          </ul>
        </div>
      </div>

      <!-- Row 2 Examen -->
      <div class="row table-row py-2">
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">2nd</div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
          <ul>
            <li>Biology</li>
            <li>Mathematics</li>
            <li>Art and Design</li>
          </ul>
        </div>
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">5th</div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <ul>
            <li>Biology</li>
            <li>Mathematics</li>
            <li>Art and Design</li>
          </ul>
        </div>
      </div>

      <!-- Row 3 Examen -->
      <div class="row table-row py-2">
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">3rd</div>
        <div class="col-md-5 d-flex align-items-center justify-content-center">
          <ul>
            <li>FCE for Schools</li>
          </ul>
        </div>
        <div class="col-md-2 text-center d-flex align-items-center justify-content-center">6th</div>
        <div class="col-md-3 d-flex align-items-center justify-content-center">
          <ul>
            <li>English</li>
            <li>Literature</li>
            <li>History</li>
            <li>Spanish as a first Language</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- //courses section -->
<div class="container-video">
  <div class="album-videos-embebidos flex justify-center">
    <iframe frameborder="0" src="https://www.youtube.com/embed/WVBEfN4xVN4" allowfullscreen class="w-full md:w-2/3 lg:w-1/2 aspect-video"></iframe>
  </div>
</div>

@if($latestPosts->isNotEmpty())
@component('_components.blog-block', [
'title' => 'Últimas Novedades ',
'highlight' => '- Inglés',
'latestPosts' => $latestPosts,
'route' => route('all-posts-english'),
'text'=>'Ver todas las novedades de Inglés'])
@endcomponent
@endif

@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style-letter.css')}}">
@endsection