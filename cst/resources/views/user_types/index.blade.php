<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/component/sidebar.css')}}">
    @endsection  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipos de Usuarios') }}
        </h2>
    </x-slot>
    <div class="container py-md-5 py-4">
        <div class="row">
            <livewire:sidebar :menuTitle="'ABMs'" :dropdowns="$dropdowns" />
            <div class="col-md-8">
                <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="block mb-8">
                        <a href="{{ route('userType.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add User Type</a>
                    </div>           
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 w-full">
                                    <thead>
                                    <tr>
                                        <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col" width="200" class="px-6 py-3 bg-gray-50">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($userTypes as $userType)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $userType->id }}
                                                </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $userType->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <a href="{{ route('userType.show', $userType->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">
                                                    <i class="fas fa-file-alt"></i>
                                                </a>
                                                <a href="{{ route('userType.edit', $userType->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                                    <i class="fa-solid fa-pencil"></i>
                                                </a>
                                                <form class="inline-block" action="{{ route('userType.destroy', $userType->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>