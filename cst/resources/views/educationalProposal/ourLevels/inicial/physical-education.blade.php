@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','La Educación Física')
@slot('link1Text','Nivel Inicial')
@slot('link1Url',route('inicial'))
@slot('link2Text','Educación Física')

@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style title-page">La Educación Física en Nivel Inicial</h3>
    </div>
    <div class="container py-md-5 py-4">
        <div class="row">
            @include('layouts._partials.menus.menu-inicial')
            <!-- Columna derecha -->
            <div class="col-md-7">
                <section class="w3l-team-13 py-5" id="team">
                    <div class="container py-md-5 py-4">
                        <p>
                            La Educación Física contribuye a la formación integral de los niños propiciando de modo
                            intencionado y sistemático, la construcción de saberes corporales, motrices, lúdicos y
                            relacionales con la finalidad de enriquecer la relación del sujeto consigo mismo y con los
                            otros. </p>

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