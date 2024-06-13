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
            <div class="content-wrapper max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="row">
                                    <livewire:user-component />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>