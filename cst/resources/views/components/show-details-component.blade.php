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
                            @if ($model->{$field['name']} == 1)
                                Habilitado
                            @else
                                Deshabilitado
                            @endif
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

