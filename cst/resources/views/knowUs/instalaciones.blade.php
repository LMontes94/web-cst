@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('backgroundImage','/assets/img/colegio.jpg')
@slot('pageTitle','Instalaciones')
@slot('link1Text','Conocenos')
@slot('link1Url',route('index'))
@slot('link2Text','Instalaciones')

@endcomponent

@endsection