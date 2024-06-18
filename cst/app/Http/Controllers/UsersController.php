<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\Dropdown;
use App\Models\UserType;

class UsersController extends Controller
{
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = Dropdown::getMenu();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTypes = \App\Models\UserType::all()->pluck('name', 'id');
        $users = User::all();
        $dropdowns = $this->dropdowns;
        return view('users.index', compact('users', 'dropdowns', 'userTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userTypes = \App\Models\UserType::all()->pluck('name', 'id');

        $fields = [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text'],
            ['name' => 'email', 'label' => 'Email', 'type' => 'email'],
            ['name' => 'password', 'label' => 'Password', 'type' => 'password'],
            ['name' => 'user_type_id', 'label' => 'User Type', 'type' => 'select', 'options' => $userTypes],
        ];

        $dropdowns = $this->dropdowns;
        return view('users.create', compact('dropdowns','fields'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = new User([
            'name'=> $request->name,
            'user_type_id' => $request->user_type_id,
        ]);
        $user->save();
        $dropdowns = $this->dropdowns;
        return redirect()->route('users.index', compact('user', 'dropdowns'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $fields = [
            ['name' => 'id', 'label' => 'ID'],
            ['name' => 'name', 'label' => 'Name'],
            ['name' => 'state', 'label' => 'Estado'],
            ['name' => 'name', 'label' => 'User Type', 'relation' => 'userType'],
        ];

        $dropdowns = $this->dropdowns;
        return view('users.show', compact('user', 'dropdowns','fields'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $userTypes = UserType::all()->pluck('name', 'id');

        $fields = [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'value' => $user->name],
            ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'value' => $user->email],    
            ['name' => 'password', 'label' => 'Password', 'type' => 'password'],
            ['name' => 'user_type_id', 'label' => 'User Type', 'type' => 'select', 'options' => $userTypes, 'value' => $user->user_type_id],
        ];

        $dropdowns = $this->dropdowns;
        return view('users.edit', compact('user', 'dropdowns','fields','userTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:6|confirmed',
            'user_type_id' => 'required|exists:user_types,id'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
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
