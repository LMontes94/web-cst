<?php

namespace App\Helpers;

class Dropdown
{
    public static function getMenu()
    {
        return [
            [
                'title' => 'Usuarios',
                'icon' => 'fa-solid fa-user',
                'items' => [
                    ['label' => 'Listado completo', 'link' => route('users.index')],
                    ['label' => 'Crear', 'link' => route('users.create')],
                ]
            ],
            [
                'title' => 'Personal',
                'icon' => 'fa-solid fa-user',
                'items' => [
                    ['label' => 'Lista completa', 'link' => route('staff.index')],
                    ['label' => 'Crear', 'link' => route('staff.create')],
                ]
            ],
            [
                'title' => 'Secciones',
                'icon' => 'fa-solid fa-layer-group',
                'items' => [
                    ['label' => 'Lista completa', 'link' => route('sections.index')],
                    ['label' => 'Crear', 'link' => route('sections.create')],
                ]
            ],
            [
                'title' => 'Departamentos',
                'icon' => '',
                'items' => [
                    ['label' => 'Lista completa', 'link' => route('department.index')],
                    ['label' => 'Crear', 'link' => route('department.create')],
                ]
            ],
            [
                'title' => 'Posts',
                'icon' => 'fa-solid fa-file-alt',
                'items' => [
                    ['label' => 'Lista completa', 'link' => route('posts.index')],
                    ['label' => 'Crear', 'link' => route('posts.create')],
                ]
            ],
            [
                'title' => 'Tipos y Roles',
                'icon' => '',
                'items' => [
                    ['label' => 'Tipos de usuarios', 'link' => route('userType.index')],
                    ['label' => 'Tipo de publicaciones', 'link' => route('postType.index')],
                    ['label' => 'Cargos', 'link' => route('staff_positions.index')],
                ]
            ],
        ];
    }
}
