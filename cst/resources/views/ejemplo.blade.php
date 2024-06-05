<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Colegio Santa Teresita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-label for="example" :value="__('Ejemplo de Etiqueta')" class="block font-medium text-sm text-gray-700" />
                
                <!-- Aquí puedes agregar más contenido -->
                <p class="mt-4">Este es un ejemplo de contenido dentro de tu layout.</p>
                
                <!-- Otra etiqueta de ejemplo -->
                <x-label for="example2" :value="__('Otra Etiqueta de Ejemplo')" class="block font-medium text-sm text-gray-700 mt-4" />
           
            </div>
        </div>
    </div>
</x-app-layout>
