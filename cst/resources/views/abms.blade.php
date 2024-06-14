@php
use App\Helpers\Dropdown;

$dropdowns = Dropdown::getMenu();
@endphp
<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/component/sidebar.css')}}">
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Colegio Santa Teresita') }}
        </h2>
    </x-slot>
    <div class="container py-md-5 py-4">
        <div class="row">
            <livewire:sidebar :menuTitle="'ABMs'" :dropdowns="$dropdowns" />
            <div class="col-md-8 ">
                <section class="w3l-team-13 py-5 bg-col-right" id="team">
                    <div class="container py-md-5 py-4">
                        <div class="mb-8">
                            <div class="flex items-center">
                                <i class="fa-solid fa-users w-6 h-6 text-gray-400"></i>
                                <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                    <a href="">Usuarios</a>
                                </h2>
                            </div>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                En esta sección, puedes gestionar los usuarios del sistema, agregar nuevos usuarios, editar la información existente y asignar roles.
                            </p>
                            <p class="mt-4 text-sm">
                                <a href="" class="inline-flex items-center font-semibold text-indigo-600">
                                    Ver detalles de usuarios
                                    <i class="fa-solid fa-arrow-right ms-2 w-5 h-4 fill-indigo-500"></i>
                                </a>
                            </p>
                        </div>

                        <div class="my-12">
                            <div class="flex items-center">
                                <i class="fa-solid fa-layer-group w-6 h-6 text-gray-400"></i>
                                <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                    <a href="">Secciones</a>
                                </h2>
                            </div>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                En esta sección, puedes gestionar las diferentes secciones del sitio web, agregar nuevas secciones, editar las existentes y administrar su contenido.
                            </p>
                            <p class="mt-4 text-sm">
                                <a href="" class="inline-flex items-center font-semibold text-indigo-700">
                                    Ver detalles de las secciones
                                    <i class="fa-solid fa-arrow-right ms-2 w-5 h-4 fill-indigo-500"></i>
                                </a>
                            </p>
                        </div>
                        <div class="my-12">
                            <div class="flex items-center">
                                <i class="fa-solid fa-building w-6 h-6 text-gray-400"></i>
                                <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                    <a href="">Departamentos</a>
                                </h2>
                            </div>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                En esta sección, puedes gestionar los departamentos del sitio web, añadir nuevos departamentos, editar los existentes y supervisar su contenido.
                            </p>
                            <p class="mt-4 text-sm">
                                <a href="" class="inline-flex items-center font-semibold text-indigo-700">
                                    Ver detalles de los departamentos
                                    <i class="fa-solid fa-arrow-right ms-2 w-5 h-4 fill-indigo-500"></i>
                                </a>
                            </p>
                        </div>
                        <div class="my-12">
                            <div class="flex items-center">
                                <i class="fa-solid fa-file-alt w-6 h-6 text-gray-400"></i>
                                <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                    Tipos de Publicaciones
                                </h2>
                            </div>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                En esta sección, puedes gestionar los diferentes tipos de publicaciones del sitio web. Añadir nuevos tipos, editar los existentes.
                            </p>
                            <p class="mt-4 text-sm">
                                <a href="" class="inline-flex items-center font-semibold text-indigo-700">
                                    Crear un nuevo tipo de publicación
                                    <i class="fa-solid fa-arrow-right ms-2 w-5 h-4 fill-indigo-500"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>