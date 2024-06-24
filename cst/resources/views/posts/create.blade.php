<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/component/sidebar.css') }}">
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="container py-md-5 py-4">
        <div class="row">
            <livewire:sidebar :menuTitle="'ABMs'" :dropdowns="$dropdowns" />
            <div class="col-md-8">
                <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="block mb-8">
                        <a href="{{ route('posts.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
                        @csrf

                        <!-- Título -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Subtítulo -->
                        <div>
                            <label for="subtitle" class="block text-sm font-medium text-gray-700">Subtitle</label>
                            <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Descripción -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('description') }}</textarea>
                        </div>

                        <!-- Tipo de Post -->
                        <div>
                            <label for="post_type_id" class="block text-sm font-medium text-gray-700">Post Type</label>
                            <select name="post_type_id" id="post_type_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @foreach($postTypes as $id => $name)
                                    <option value="{{ $id }}" {{ old('post_type_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Fecha de Publicación -->
                        <div>
                            <label for="discharge_date" class="block text-sm font-medium text-gray-700">Discharge Date</label>
                            <input type="date" name="discharge_date" id="discharge_date" value="{{ old('discharge_date') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Fecha -->
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                            <input type="date" name="date" id="date" value="{{ old('date') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Departamentos -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Departments</label>
                            <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach($departments as $department)
                                    <label class="flex items-center">
                                        <input type="checkbox" name="departments[]" value="{{ $department->id }}" {{ in_array($department->id, old('departments', [])) ? 'checked' : '' }} class="form-checkbox h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        <span class="ml-2 text-sm text-gray-700">{{ $department->name }}{{ $department->section ? ' - ' . $department->section->name : '' }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Imágenes -->
                        <div>
                            <label for="image_files" class="block text-sm font-medium text-gray-700">Images</label>
                            <input type="file" name="image_files[]" id="image_files" multiple class="mt-1 block w-full text-gray-500">
                        </div>

                        <!-- Documentos -->
                        <div>
                            <label for="document_files" class="block text-sm font-medium text-gray-700">Documents</label>
                            <input type="file" name="document_files[]" id="document_files" multiple class="mt-1 block w-full text-gray-500">
                        </div>

                        <!-- Videos -->
                        <div>
                            <label for="video_files" class="block text-sm font-medium text-gray-700">Videos</label>
                            <input type="file" name="video_files[]" id="video_files" multiple class="mt-1 block w-full text-gray-500">
                        </div>

                        <!-- Botón de Crear -->
                        <div class="flex justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                Create Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
