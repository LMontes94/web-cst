<div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
    <div class="blog-card-single">
        <div class="grids5-info">
            @if ($post->imagePosts->isNotEmpty())
            <a href="{{ route('post.show', $post->id) }}">
                <img src="{{ Storage::url($post->imagePosts->first()->url_img) }}" alt="{{ $post->title }}" />
            </a>
            @endif
            <div class="blog-info">
                <h4><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h4>
                <p>{{ \Illuminate\Support\Str::limit($post->description, 100) }}</p>
                <div class="d-flex align-items-center justify-content-between mt-4">
                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                        <span class="small ms-2">{{ $post->user->name }}</span>
                    </a>
                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>{{ $post->created_at->format('M d, Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
    <div class="blog-card-single">
        <div class="grids5-info">
            @if ($post->imagePosts->isNotEmpty())
            <a href="{{ route('post.show', $post->id) }}">
                <img src="{{ Storage::url($post->imagePosts->first()->url_img) }}" alt="{{ $post->title }}" />
            </a>
            <div class="blog-info">
                <h4><a href="#blog">Games Programs...</a></h4>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sunt inc
                    officia deserunt.</p>
                <div class="d-flex align-items-center justify-content-between mt-4">
                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                        <img class="img-fluid" src="assets/images/testi1.jpg" alt="admin" style="max-width:40px"> <span class="small ms-2">Molive Joe</span>
                    </a>
                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Oct 10, 2021</p>
                </div>
            </div>
        </div>
    </div>
</div>