@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Nuestros Niveles')
@slot('link1Text','Propuesta Educativa')
@slot('link1Url',route('index'))
@slot('link2Text','Nuestros Niveles')

@endcomponent
@include('_components.ourLevels')
<!-- //courses section -->
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/css/style-staff.css')}}">
@endsection