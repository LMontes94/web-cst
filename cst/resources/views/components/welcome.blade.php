<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-25 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Bienvenido al Panel de Administración
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Sistema de gestión del sitio <a href="http://www.colegiosteresita.edu.ar" class="text-blue-500 hover:underline">www.colegiosteresita.edu.ar</a>. Para consultas, por favor contacta a <a href="mailto:soporte@colegiosteresita.edu.ar" class="text-blue-500 hover:underline">soporte@colegiosteresita.edu.ar</a>.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
        <div class="container mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-4 px-6">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
                </div>
                <div class="py-12 px-6">
                    <div class="flex flex-wrap justify-around gap-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <x-card title="Usuarios" borderColor="primary" icon="user" count="10" />
                            <x-card title="Secciones" borderColor="primary" icon="fa-solid fa-layer-group" count="5" />
                            <x-card title="Departamentos" borderColor="primary" icon="fa-solid fa-building" count="3" />
                            <x-card title="Pub Tipos" borderColor="primary" icon="fa-solid fa-file-alt" count="4" />
                            <x-card title="Publicaciones" borderColor="success" icon="fa-solid fa-file-alt" count="20" />
                    </div>
                </div>
            </div>
        </div>
</div>


