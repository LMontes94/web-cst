<div>
    <!-- Mensajes de éxito y error -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    
    <div class="flex justify-around">
    <livewire:user.user-create-component />
    <livewire:user.user-list-component />
    </div>
</div>

