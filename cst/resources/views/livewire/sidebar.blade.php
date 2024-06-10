<!-- Columna izquierda -->
<div class="col-md-2 ps-lg-5 mt-md-0 mt-5 menu-principal bg-custom">
    <div class="contact-left">
        <div class="cont-details">
            <div class="d-flex contact-grid">
                <div class="menu-title">
                    <h3 class="inline-flex items-center px-0 py-3 text-lg font-medium">{{ $menuTitle }}</h3>
                </div>
            </div>
            @foreach ($dropdowns as $dropdown)
                <livewire:dropdown :title="$dropdown['title']" :icon="$dropdown['icon']" :items="$dropdown['items']" wire:key="{{ $dropdown['title'] }}" />
            @endforeach
        </div>
    </div>
</div>
