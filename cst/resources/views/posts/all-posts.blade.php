@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Todas las Novedades')
@slot('link1Text','Conócenos')
@slot('link1Url',route('index'))
@slot('link2Text','Todas las Novedades')
@endcomponent

@component('_components.blog-block', [
'title' => 'Todas',
'highlight' => 'las Novedades',
'latestPosts' => $posts,
'route' => route('index'), 'text'=>'Volver'])
@endcomponent

@endsection