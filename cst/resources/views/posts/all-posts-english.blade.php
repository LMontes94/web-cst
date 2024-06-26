@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Todas las Novedades')
@slot('link1Text','Conócenos')
@slot('link1Url',route('index'))
@slot('link2Text','Novedades de Inglés')
@endcomponent

@component('_components.blog-block', [
'title' => 'Todas las Novedades',
'highlight' => '- Inglés',
'latestPosts' => $posts,
'route' => route('english'), 'text'=>'Volver'])
@endcomponent

@endsection