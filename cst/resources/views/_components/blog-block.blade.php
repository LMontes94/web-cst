<div class="w3l-blog-block-5 py-1" id="blog">
    <div class="container py-md-5 py-2">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h3 class="title-style">{{ $title }} <span>{{ $highlight }}</span></h3>
        </div>
        <div class="row justify-content-center">
            @foreach($latestPosts as $post)
            @include('_components.card-article', ['post' => $post])
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ $route }}" class="btn btn-primary">{{ $text }}</a>
        </div>
    </div>
</div>