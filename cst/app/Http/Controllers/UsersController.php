<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\Dropdown;

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
        $users = User::all();
        $dropdowns = $this->dropdowns;
        return view('users.index', compact('users', 'dropdowns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dropdowns = $this->dropdowns;
        return view('users.create', compact('dropdowns'));
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
        $dropdowns = $this->dropdowns;
        return view('users.show', compact('user', 'dropdowns'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $dropdowns = $this->dropdowns;
        return view('users.edit', compact('user', 'dropdowns'));
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
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
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
