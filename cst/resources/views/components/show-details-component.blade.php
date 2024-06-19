<div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($fields as $field)
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{ $field['label'] }}
                </th>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    @if ($field['name'] === 'state')
                    {{ $field['value'] ?? ($model->{$field['name']} == 1 ? 'Habilitado' : 'Deshabilitado') }}
                    @elseif ($field['name'] === 'url_image')
                    @if (isset($field['value']) && $field['value'] !== 'N/A')
                    <img src="{{ $field['value'] }}" alt="Profile Image" class="h-32 w-32 object-cover rounded-md mb-2">
                    @else
                    {{ $field['value'] ?? 'N/A' }}
                    @endif
                    @elseif (isset($field['value']))
                    {{ $field['value'] }}
                    @elseif (isset($field['relation']))
                    {{ $model->{$field['relation']}->{$field['name']} ?? 'N/A' }}
                    @else
                    {{ $model->{$field['name']} }}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>