@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Pastoral')
@slot('link1Text','Propuesta Educativa')
@slot('link1Url',route('index'))
@slot('link2Text','Pastoral')

@endcomponent

@if($latestPosts->isNotEmpty())
@component('_components.blog-block', [
'title' => 'Últimas Novedades ',
'highlight' => '',
'latestPosts' => $latestPosts,
'route' => route('all-posts'),
'text'=>'Ver todas las novedades'])
@endcomponent
@endif

@endsection