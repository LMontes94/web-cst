<div class="col-lg-3 col-6">
    <div class="image-one">
        <img src="{{ $staff->url_image ? Storage::url('public/img/staff/' . $staff->url_image) : 'URL_de_imagen_por_defecto' }}" alt="{{ $staff->name }}" class="arrow-png img-responsive historic-photo" /><h4>{{ $staff->name }}</h4>  
        @foreach($staff->staffPositions as $position)
        <p>{{ $position->name }}</p>
        @endforeach
        <h6>{{ optional($staff->department->section)->name }}</h6>
    </div>
</div>