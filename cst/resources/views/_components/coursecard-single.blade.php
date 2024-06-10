<!-- resources/views/components/coursecard-single.blade.php -->
<div class="coursecard-single">
    <div class="grids5-info position-relative">
        <img src="{{ $image }}" alt="" class="img-fluid" />
        <div class="meta-list">
            <a href="{{ $route }}" class="{{ $class }}">{{ $level }}</a>
        </div>
    </div>
    <div class="content-main-top">
        <h4><a href="{{ $route }}">{{ $title }}</a></h4>
        <p>{{ $description }}</p>
        <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
            <h6></h6>
            <a class="btn btn-style-primary" href="{{ $route }}">Leer Más<i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</div>