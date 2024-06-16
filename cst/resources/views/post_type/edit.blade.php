<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/component/sidebar.css') }}">
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post Type') }}
        </h2>
    </x-slot>

    <div class="container py-md-5 py-4">
        <div class="row">
            <livewire:sidebar :menuTitle="'ABMs'" :dropdowns="$dropdowns" />
            <div class="col-md-8">
                <x-edit-form-component 
                    :action="route('postType.update', $postType->id)" 
                    :fields="[
                        ['name' => 'name', 'label' => 'Name', 'type' => 'text'],
                    ]" 
                    :model="$postType" 
                    :backRoute="route('postType.index')" />
            </div>
        </div>
    </div>
</x-app-layout>