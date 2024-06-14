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
                        <a href="{{ route('postType.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
                    </div>
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 w-full">
                                        <tr class="border-b">
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ID
                                            </th>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                                {{ $postType->id }}
                                            </td>
                                        </tr>
                                        <tr class="border-b">
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                                {{ $postType->name }}
                                            </td>
                                        </tr>
                                        <tr class="border-b">
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Estado
                                            </th>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                                @if ($postType->state == 1)
                                                Habilitado
                                                @else
                                                Deshabilitado
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block mt-8">
                        <a href="{{ route('postType.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>