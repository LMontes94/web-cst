<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/component/sidebar.css') }}">
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="container py-md-5 py-4">
        <div class="row">
            <livewire:sidebar :menuTitle="'ABMs'" :dropdowns="$dropdowns" />
            <div class="col-md-8">
                <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
                        @csrf
                        @method('PUT')

                        <!-- Título -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{ $post->title }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Subtítulo -->
                        <div>
                            <label for="subtitle" class="block text-sm font-medium text-gray-700">Subtitle</label>
                            <input type="text" name="subtitle" id="subtitle" value="{{ $post->subtitle }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <!-- Descripción -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $post->description }}</textarea>
                        </div>

                        <!-- Tipo de Post -->
                        <div>
                            <label for="post_type_id" class="block text-sm font-medium text-gray-700">Post Type</label>
                            <select name="post_type_id" id="post_type_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @foreach($postTypes as $id => $name)
                                    <option value="{{ $id }}" {{ $post->post_type_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Fecha de Publicación -->
                        <div class="mb-4">
                            <label for="discharge_date" class="block text-gray-700 text-sm font-bold mb-2">Discharge Date:</label>
                            <input type="date" name="discharge_date" value="{{ old('discharge_date', $post->discharge_date->format('Y-m-d')) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                            <input type="date" name="date" value="{{ old('date', $post->date->format('Y-m-d')) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <!-- Departamentos -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Departments</label>
                            <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach($departmentOptions as $id => $name)
                                    <label class="flex items-center">
                                        <input type="checkbox" name="departments[]" value="{{ $id }}" {{ $post->departments->contains($id) ? 'checked' : '' }} class="form-checkbox h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        <span class="ml-2 text-sm text-gray-700">{{ $name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Imágenes -->
                        <div>
                            <label for="image_files" class="block text-sm font-medium text-gray-700">Images</label>
                            <input type="file" name="image_files[]" id="image_files" multiple class="mt-1 block w-full text-gray-500">
                            <div class="mt-2 flex flex-wrap gap-2">
                                @foreach($post->imagePosts as $image)
                                <a href="{{ asset(Storage::url($image->url_img)) }}" class="w-24 h-24 object-cover rounded-lg shadow-md flex items-center justify-center rounded-lg shadow-md text-center text-indigo-600 hover:bg-indigo-100 transition duration-300 ease-in-out" target="_blank">
                                    <img src="{{ asset(Storage::url($image->url_img)) }}" alt="Image" class="w-24 h-24 object-cover rounded-lg shadow-md">
                                </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Documentos -->
                        <div>
                            <label for="document_files" class="block text-sm font-medium text-gray-700">Documents</label>
                            <input type="file" name="document_files[]" id="document_files" multiple class="mt-1 block w-full text-gray-500">
                            <div class="mt-2 flex flex-wrap gap-2">
                                @foreach($post->documentPosts as $document)
                                    <a href="{{ asset(Storage::url($document->url_doc)) }}" class="w-24 h-24 object-cover rounded-lg shadow-md flex items-center justify-center rounded-lg shadow-md text-center text-indigo-600 hover:bg-indigo-100 transition duration-300 ease-in-out" target="_blank">
                                        <i class="fa-regular fa-file fa-3x"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Videos -->
                        <div>
                            <label for="video_files" class="block text-sm font-medium text-gray-700">Videos</label>
                            <input type="file" name="video_files[]" id="video_files" multiple class="mt-1 block w-full text-gray-500">
                            <div class="mt-2 flex flex-wrap gap-2">
                                @foreach($post->videoPosts as $video)
                                    <a href="{{ asset(Storage::url($video->url_video)) }}" class="w-24 h-24 object-cover rounded-lg shadow-md flex items-center justify-center rounded-lg shadow-md text-center text-indigo-600 hover:bg-indigo-100 transition duration-300 ease-in-out" target="_blank">
                                        <i class="fa-solid fa-file-video fa-3x"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Botón de Actualizar -->
                        <div class="flex justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                Update Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
