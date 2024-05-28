@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Nuestros Niveles')
@slot('link1Text','Propuesta Educativa')
@slot('link1Url',route('index'))
@slot('link2Text','Nuestros Niveles')

@endcomponent
<div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
    <div class="container py-md-5 py-4">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style">Nuestros Niveles</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="coursecard-single">
                    <div class="grids5-info position-relative">
                        <img src="assets/images/c1.jpg" alt="" class="img-fluid" />
                        <div class="meta-list">
                            <a href="{{route('inicial')}}">Inicial</a>
                        </div>
                    </div>
                    <div class="content-main-top">
                        <h4><a href="{{route('inicial')}}">Nivel Inicial</a></h4>
                        <p>La infancia se construye en tiempos pequeños y es el momento de los aprendizajes más
                            significativos.</p>
                        <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                            <h6></h6>
                            <a class="btn btn-style-primary" href="{{route('inicial')}}">Leer Más<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="coursecard-single">
                    <div class="grids5-info position-relative">
                        <img src="assets/images/c2.jpg" alt="" class="img-fluid" />
                        <div class="meta-list">
                            <a href="{{route('primaria')}}" class="sec-2">Primaria</a>
                        </div>
                    </div>
                    <div class="content-main-top">
                        <h4><a href="{{route('primaria')}}">Nivel Primario</a></h4>
                        <p>Nuestra propuesta apunta al desarrollo integral de los alumnos para que puedan lograr
                            confianza y autonomía.</p>
                        <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                            <h6></h6>
                            <a class="btn btn-style-primary" href="{{route('primaria')}}">Leer Más<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="coursecard-single">
                    <div class="grids5-info position-relative">
                        <img src="assets/images/c3.jpg" alt="" class="img-fluid" />
                        <div class="meta-list">
                            <a href="{{route('secundaria')}}" class="sec-3">Secundaria</a>
                        </div>
                    </div>
                    <div class="content-main-top">
                        <h4><a href="{{route('secundaria')}}">Nivel Secundario</a></h4>
                        <p>Buscamos fomentar en nuestros alumnos el pensamiento y la reflexión, el espíritu de
                            trabajo y el deseo de saber.</p>
                        <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                            <h6></h6>
                            <a class="btn btn-style-primary" href="{{route('secundaria')}}">Leer Más<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //courses section -->
</div>

</div>

</div>

@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
@endsection