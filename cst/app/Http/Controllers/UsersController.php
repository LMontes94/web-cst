<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = [
            [
                'title' => 'Usuarios',
                'icon' => 'fa-solid fa-user',
                'items' => [
                    ['label' => 'Listado completo ', 'link' => route('users.index')],
                    ['label' => 'Crear', 'link' => route('users.create')]
                ]
            ],
            [
                'title' => 'Personal',
                'icon' => 'fa-solid fa-user',
                'items' => [
                    ['label' => 'Lista completa', 'link' => '#'],
                    ['label' => 'Crear', 'link' => '#']
                ]
            ],
            [
                'title' => 'Secciones',
                'icon' => 'fa-solid fa-layer-group',
                'items' => [
                    ['label' => 'Lista completa', 'link' => '#'],
                    ['label' => 'Crear', 'link' => '#']
                ]
            ],
            [
                'title' => 'Departamentos',
                'icon' => '',
                'items' => [
                    ['label' => 'Lista completa', 'link' => '#'],
                    ['label' => 'Crear', 'link' => '#']
                ]
            ],
            [
                'title' => 'Posts',
                'icon' => 'fa-solid fa-file-alt',
                'items' => [
                    ['label' => 'Lista completa', 'link' => '#'],
                    ['label' => 'Crear', 'link' => '#']
                ]
            ],
            [
                'title' => 'Tipos y Roles',
                'icon' => '',
                'items' => [
                    ['label' => 'Tipos de usuarios', 'link' => route('userType.index')],
                    ['label' => 'Tipo de posts', 'link' => '#'],
                    ['label' => 'Cargos', 'link' => '#']
                ]
            ],
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTypes = UserType::all();
        $users = User::all();
        $dropdowns = $this->dropdowns;
        return view('users.index', compact('users', 'dropdowns','userTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userTypes = UserType::all();
        $dropdowns = $this->dropdowns;
        return view('users.create', compact('dropdowns','userTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());
        $dropdowns = $this->dropdowns;
        return redirect()->route('users.index', compact('user', 'dropdowns'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $userTypes = UserType::all();
        $dropdowns = $this->dropdowns;
        return view('users.show', compact('user', 'dropdowns','userTypes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $userTypes = UserType::all();
        $dropdowns = $this->dropdowns;
        return view('users.edit', compact('user', 'dropdowns','userTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'user_type_id' => 'required|exists:user_types,id',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'user_type_id' => $request->user_type_id,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        $dropdowns = $this->dropdowns;
        return redirect()->route('users.index', compact('user', 'dropdowns'));
    }
}
