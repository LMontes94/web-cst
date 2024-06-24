@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle','Todas las Novedades')
@slot('link1Text','Conócenos')
@slot('link1Url',route('index'))
@slot('link2Text','Todas las Novedades')
@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style">Todas <span>las Novedades</span></h3>
    </div>
    <div class="row justify-content-center">
        @foreach($posts as $post)
        @include('_components.card-article', ['post' => $post])
        @endforeach
    </div>
    <div class="text-center mt-4">
        {{ $posts->links() }}
    </div>
</div>
@endsection