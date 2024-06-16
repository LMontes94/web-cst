<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/component/sidebar.css') }}">
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Colegio Santa Teresita') }}
        </h2>
    </x-slot>
    <div class="container py-md-5 py-4">
        <div class="row">
            <livewire:sidebar :menuTitle="'ABMs'" :dropdowns="$dropdowns" />
            <div class="col-md-8">
                <x-create-form-component 
                    :action="route('department.store')" 
                    :method="'POST'" 
                    :fields="$fields" 
                />
            </div>
        </div>
    </div>
</x-app-layout>