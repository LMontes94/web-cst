<div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="block mb-8">
        <a href="{{ route($routePrefix . '.create') }}" class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">Add Item</a>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 w-full">
                        <thead>
                            <tr>
                                @foreach ($headers as $header)
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ $header['label'] }}
                                    </th>
                                @endforeach
                                <th class="px-6 py-3 bg-gray-50"></th> <!-- Empty header for action buttons -->
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($items as $item)
                            <tr>
                                @foreach ($headers as $header)
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        @if (isset($header['relation']))
                                            @php
                                                $relations = explode('.', $header['relation']);
                                                $value = $item;
                                                foreach ($relations as $relation) {
                                                    $value = $value->{$relation} ?? null;
                                                    if (!$value) {
                                                        break;
                                                    }
                                                }
                                                $value = $value->{$header['name']} ?? 'N/A';
                                            @endphp
                                            {{ $value }}
                                        @else
                                            {{ $item->{$header['name']} }}
                                        @endif
                                    </td>
                                @endforeach
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route($routePrefix . '.show', $item->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">
                                        <i class="fas fa-file-alt"></i>
                                    </a>
                                    <a href="{{ route($routePrefix . '.edit', $item->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form class="inline-block" action="{{ route($routePrefix . '.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
    <div class="block mt-8">
        <a href="{{ route($routePrefix . '.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
    </div>
</div>
