<div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="post" action="{{ $action }}">
            @csrf
            @if ($method !== 'POST')
                @method($method)
            @endif
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    @foreach ($fields as $field)
                        <label for="{{ $field['name'] }}" class="block font-medium text-sm text-gray-700">{{ $field['label'] }}</label>
                        
                        @if ($field['type'] === 'select')
                            <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-select rounded-md shadow-sm mt-1 block w-full">
                                @foreach ($field['options'] as $optionValue => $optionLabel)
                                    <option value="{{ $optionValue }}" {{ old($field['name'], $field['value'] ?? '') == $optionValue ? 'selected' : '' }}>{{ $optionLabel }}</option>
                                @endforeach
                            </select>
                        @else
                            <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old($field['name'], $field['value'] ?? '') }}" />
                        @endif

                        @error($field['name'])
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    @endforeach
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
