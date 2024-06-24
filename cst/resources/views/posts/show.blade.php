@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle', $post->title)
@slot('link1Text', 'Conócenos')
@slot('link1Url', route('index'))
@slot('link2Text', $post->title)
@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style">{{ $post->title }}</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="{{ Storage::url($post->url_image) }}" alt="{{ $post->title }}" class="img-fluid mb-4">
            <p>{{ $post->description }}</p>
            <p><strong>Autor:</strong> {{ $post->user->name }}</p>
            <p><strong>Fecha:</strong> {{ $post->created_at->format('M d, Y') }}</p>
        </div>
    </div>
</div>
@endsection