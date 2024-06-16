<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/component/sidebar.css') }}">
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show User Type') }}
        </h2>
    </x-slot>

    <div class="container py-md-5 py-4">
        <div class="row">
            <livewire:sidebar :menuTitle="'ABMs'" :dropdowns="$dropdowns" />
            <div class="col-md-8">
                <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="block mb-8">
                        <a href="{{ route('userType.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
                    </div>
                    <x-show-details-component :model="$userType" :fields="[
                        ['name' => 'id', 'label' => 'ID'],
                        ['name' => 'name', 'label' => 'Name'],
                        ['name' => 'state', 'label' => 'Estado'],
                    ]" />
                    <div class="block mt-8">
                        <a href="{{ route('userType.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>