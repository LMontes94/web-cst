<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/component/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/component/main.css') }}">
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>

    <div class="container py-md-5 py-4">
        <div class="row">
            <livewire:sidebar :menuTitle="'ABMs'" :dropdowns="$dropdowns" />
            <div class="col-md-8 w-10/12">
                <x-table-component :items="$staff" :headers="[ 
                    ['name' => 'id', 'label' => 'ID'],
                    ['name' => 'name', 'label' => 'Name'],
                    ['name' => 'surname', 'label' => 'Surname'],
                    ['name' => 'name', 'label' => 'Department', 'relation' => 'department'],
                    ['name' => 'name', 'label' => 'Section', 'relation' => 'department.section'],
                    ['name' => 'name', 'label' => 'Positions', 'relation' => 'staffPositions'],
                    ['name' => 'url_image', 'label' => 'Image']
                    ]" routePrefix="staff" />
            </div>
        </div>
    </div>
</x-app-layout>