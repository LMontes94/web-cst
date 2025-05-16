<div class="col-lg-3 col-6">
    <div class="image-one">
        <img src="{{ $staff->url_image ? Storage::url('public/img/staff/' . $staff->url_image) : 'URL_de_imagen_por_defecto' }}" alt="{{ $staff->name }}" class="arrow-png img-responsive historic-photo" />
        <h4 style="margin-bottom: 0;">{{ $staff->name }}</h4>
        <h4 style="margin-top: 0; margin-bottom: 8px;">{{ $staff->surname }}</h4>
        @foreach($staff->staffPositions as $position)
        <p style="margin-top: 8px;">{{ $position->name }}</p>
        @endforeach
        <h6>{{ optional($staff->department->section)->name }}</h6>
    </div>
</div>