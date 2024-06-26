<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use App\Traits\RecordsUserActivity;
use Illuminate\Http\Request;
use App\Helpers\Dropdown;

class UserTypeController extends Controller
{
    use RecordsUserActivity;
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = Dropdown::getMenu();
    }

    public function index()
    {
        $userTypes = UserType::all();
        $dropdowns = $this->dropdowns;
        return view('user_types.index', compact('userTypes', 'dropdowns'));
    }

    public function create()
    {
        $dropdowns = $this->dropdowns;
        return view('user_types.create', compact('dropdowns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $userType = new UserType([
            'name' => $request->name,
            'state' => 1, // Asignando el valor 1 a la propiedad state
        ]);
        $userType->save();
        $this->recordActivity('Se creo un nuevo tipo de usuario', 'Usuario: ' . $userType->name);
        return redirect()->route('userType.index')->with('success', 'User Type created successfully.');
    }

    public function show(UserType $userType)
    {
        $dropdowns = $this->dropdowns;
        return view('user_types.show', compact('userType', 'dropdowns'));
    }

    public function edit(UserType $userType)
    {
        $dropdowns = $this->dropdowns;
        return view('user_types.edit', compact('userType', 'dropdowns'));
    }

    public function update(Request $request, UserType $userType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $userType->update([
            'name' => $request->name,
        ]);
        $this->recordActivity('Se edito un nuevo tipo de usuario', 'Usuario: ' . $userType->name);
        return redirect()->route('userType.index')->with('success', 'User Type updated successfully.');
    }

    public function destroy(UserType $userType)
    {
        $this->recordActivity('Se elimino un nuevo tipo de usuario', 'Usuario: ' . $userType->name);
        $userType->delete();

        return redirect()->route('userType.index')->with('success', 'User Type deleted successfully.');
    }
}
