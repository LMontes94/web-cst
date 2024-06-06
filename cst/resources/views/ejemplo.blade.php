<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Colegio Santa Teresita') }}
        </h2>
    </x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>


                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="row">
                            <x-card title="Usuarios" borderColor="primary" icon="user" count="10" />
                            <x-card title="Secciones" borderColor="primary" icon="user" count="5" />
                            <x-card title="Departamentos" borderColor="primary" icon="user" count="3" />
                            <x-card title="Pub Tipos" borderColor="primary" icon="user" count="4" />
                            <x-card title="Publicaciones" borderColor="success" icon="user" count="20" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</x-app-layout>