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
            <livewire:sidebar :menuTitle="'Operaciones'" :dropdowns="$dropdowns" />
            <div class="col-md-8 ">
                <section class="w3l-team-13 py-5 bg-col-right" id="team">
                    <div class="container py-md-5 py-4">
                        <div class="mb-8">     
                            <x-user-activity-table />                                            
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>