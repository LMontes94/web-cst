@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Equipo Directivo')
@slot('link1Text','Conocenos')
@slot('link1Url',route('index'))
@slot('link2Text','Equipo Directivo')
@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" >
        <h3 class="title-style title-page">Equipo Directivo</h3>
    </div>
    <div class="container py-md-5 py-4">
        <div class="row">
            @include('layouts._partials.menus.left-menu-about')
            <!-- Columna derecha -->
            <div class="col-md-7">
                <section class="w3l-team-13 py-5" id="team">
                    <div class="container py-md-5 py-4">
                        <div class="row text-center left-side">
                            @foreach($staff as $member)
                                @include('_components.card-staff', ['staff' => $member])
                            @endforeach
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
@endsection