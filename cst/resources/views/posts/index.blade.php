<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/component/sidebar.css') }}">
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>
    <div class="container py-md-5 py-4">
        <div class="row">
            <livewire:sidebar :menuTitle="'ABMs'" :dropdowns="$dropdowns" />
            <div class="col-md-8">
                <div class="flex justify-between mb-4">
                    <div>
                        <select onchange="location = this.value; " class="rounded-md">
                            <option value="{{ route('posts.index', ['per_page' => 25]) }}" {{ $perPage == 25 ? 'selected' : '' }}>25</option>
                            <option value="{{ route('posts.index', ['per_page' => 50]) }}" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                            <option value="{{ route('posts.index', ['per_page' => 100]) }}" {{ $perPage == 100 ? 'selected' : '' }}>100</option>
                        </select>
                    </div>
                    <div>
                        <form action="{{ route('posts.index') }}" method="GET">
                            <input type="text" name="search" value="{{ $search }}" placeholder="Search" class="form-input rounded-md shadow-sm mt-1 block w-full">
                            <button type="submit" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Search</button>
                        </form>
                    </div>
                </div>

                <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Type</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Edit</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($posts as $post)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 ">
                                    <div class="py-1  flex items-center justify-center">{{ $post->created_at->format('Y-m-d H:i') }}</div>
                                    <div class="py-1  flex items-center justify-center">{{ $post->title }}</div>
                                    <div class="py-1  flex items-center justify-center">{{ $post->subtitle }}</div>
                                    <div class="py-1  flex items-center justify-around">
                                        @if ($post->imagePosts->count() > 0)
                                        <i class="fas fa-image text-indigo-600"></i>
                                        @endif
                                        @if ($post->documentPosts->count() > 0)
                                        <i class="fas fa-file-alt text-indigo-600"></i>
                                        @endif
                                        @if ($post->videoPosts->count() > 0)
                                        <i class="fas fa-video text-indigo-600"></i>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">{{ $post->postType->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-center">
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $posts->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>