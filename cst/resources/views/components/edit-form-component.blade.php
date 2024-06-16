<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
    <form method="POST" action="{{ $action }}">
        @csrf
        @method('PUT')
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                @foreach ($fields as $field)
                    <label for="{{ $field['name'] }}" class="block font-medium text-sm text-gray-700">{{ $field['label'] }}</label>
                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old($field['name'], $model->{$field['name']}) }}" />
                    @error($field['name'])
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                @endforeach
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                    Update
                </button>
            </div>
        </div>
    </form>
    <div class="block mt-8">
        <a href="{{ $backRoute }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
    </div>
</div>
