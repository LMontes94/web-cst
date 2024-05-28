@extends('layouts.landing')

@section('content')
  @component('_components.inner-banner')   
    @slot('pageTitle','Postulaciones')
    @slot('link1Text','Home') 
    @slot('link1Url', route('index'))
    @slot('link2Text','Admisiones')
  @endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">Postulaciones</h3>
    </div>
    @include('layouts._partials.menus.left-menu-about')
    <!-- Columna derecha -->
    <div class="col-md-7">
        <div class="row">
            <div class="col-lg-11 mt-lg-0 mt-55">
                <h4 class="title-style">Postulaciones 2025</h4>
                <p class="mt-4">Están abiertas las postulaciones para el Ciclo Lectivo 2025.
                    Para comenzar con el proceso de admisión, por favor completá el formulario
                    correspondiente a cada nivel:</p>
                <ul class="mt-4 list-style-lis pt-lg-1">
                    <li><a href="https://forms.gle/W8EnsZUUX1iEhNGY6" target="_blank">
                            <h5><i class="fas fa-check-circle"></i> Nivel Inicial</li>
                    </h5></a>
                    <li><a href="https://forms.gle/us4re1whEWzFqfLk8" target="_blank">
                            <h5><i class="fas fa-check-circle"></i> Educación Primaria</li>
                    </h5></a>
                    <li><a href="https://forms.gle/fNkaNrcNssRYm7kQ8" target="_blank">
                            <h5><i class="fas fa-check-circle"></i> Educación Secundaria</li>
                    </h5></a>
                </ul>
                <p class="mt-4">En caso de querer postularse para el ciclo lectivo en curso,
                    por favor contactarse con la secretaría correspondiente: </p>
                <ul class="mt-4 list-style-lis pt-lg-1">
                    <li>Nivel Inicial: admisionesinicial@colegiosteresita.edu.ar</li>
                    <li>Educación Primaria: secretariaep@colegiosteresita.edu.ar</li>
                    <li>Educación Secundaria: admisiones_sec@colegiosteresita.edu.ar</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>

</div>
@endsection