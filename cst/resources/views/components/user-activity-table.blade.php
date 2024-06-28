<div class="p-6 bg-white border-b border-gray-200">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
        Actividad de Usuarios
    </h2>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">Fecha</th>
                <th class="py-2">Usuario</th>
                <th class="py-2">Actividad</th>
                <th class="py-2">Detalles</th>
                <th class="py-2">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $activity)
                <tr>
                    <td class="py-2">{{ $activity->created_at->format('d/m/Y H:i:s') }}</td>                    
                    <td class="py-2">{{ $activity->user->name }}</td>
                    <td class="py-2">{{ $activity->activity }}</td>
                    <td class="py-2">{{ $activity->details }}</td>
                    @if ($activity->state == 1)
                        <td class="py-2">Habilitado</td>                        
                    @else
                    <td class="py-2">Deshabilitado</td> 
                    @endif                    
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
