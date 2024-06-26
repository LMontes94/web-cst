@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Todas las Novedades')
@slot('link1Text','Conócenos')
@slot('link1Url',route('index'))
@slot('link2Text','Novedades de Inicial')
@endcomponent

@component('_components.blog-block', [
'title' => 'Todas las Novedades',
'highlight' => '- Nivel Inicial',
'latestPosts' => $posts,
'route' => route('inicial'), 'text'=>'Volver'])
@endcomponent

@endsection