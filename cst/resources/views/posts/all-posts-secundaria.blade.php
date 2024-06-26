@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Todas las Novedades')
@slot('link1Text','Conócenos')
@slot('link1Url',route('index'))
@slot('link2Text','Novedades de Secundaria')
@endcomponent

@component('_components.blog-block', [
'title' => 'Todas las Novedades',
'highlight' => '- Nivel Secundaria',
'latestPosts' => $posts,
'route' => route('secundaria'), 'text'=>'Volver'])
@endcomponent

@endsection