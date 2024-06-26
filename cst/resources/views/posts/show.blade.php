@extends('layouts.landing')

@section('content')
@component('_components.inner-banner')
@slot('pageTitle', $post->title)
@slot('link1Text', 'Novedades')
@slot('link1Url', route('index'))
@slot('link2Text', $post->title)
@endcomponent

<div class="container py-md-5 py-4">
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
        <h3 class="title-style">{{ $post->title }}</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p><strong>Fecha:</strong> {{ $post->created_at->format('M d, Y') }}</p>

            @if($post->imagePosts->isNotEmpty())
            @foreach($post->imagePosts as $image)
            <img src="{{ Storage::url($image->url_img) }}" alt="{{ $post->title }}" class="img-fluid mb-4">
            @endforeach
            @endif

            <p>{{ $post->description }}</p>

            @if($post->documentPosts->isNotEmpty())
            <div class="documents mb-4">
                <h4>Documentos:</h4>
                <ul>
                    @foreach($post->documentPosts as $document)
                    <li class="flex items-center">
                        <a href="{{ Storage::url($document->url_doc) }}" target="_blank" class="flex items-center text-blue-600 hover:text-blue-800">
                            <i class="fa fa-file-alt mr-2"></i>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if($post->videoPosts->isNotEmpty())
            <div class="videos mb-4">
                <h4>Videos:</h4>
                @foreach($post->videoPosts as $video)
                <video controls class="w-full h-auto">
                    <source src="{{ Storage::url($video->url_video) }}" type="video/mp4">
                    <source src="{{ Storage::url($video->url_video) }}" type="video/quicktime">
                    <source src="{{ Storage::url($video->url_video) }}" type="video/x-msvideo">
                    Your browser does not support the video tag.
                </video>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>
<div class="container flex justify-content-around py-4">
    <div class="text-center mt-4">
        <a href="{{ route('index') }}" class="btn btn-primary">Inicio</a>
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('all-posts') }}" class="btn btn-primary">Ver todas las novedades</a>
    </div>
</div>
@endsection