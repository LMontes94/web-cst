<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\StaffPosition;
use Illuminate\Http\Request;
use App\Helpers\Dropdown;
use Illuminate\Support\Facades\Log;

class StaffController extends Controller
{
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = Dropdown::getMenu();
    }

    public function index()
    {
        $departments = \App\Models\Department::all()->pluck('name', 'id');
        $staff = Staff::with('department.section')->get();
        $dropdowns = $this->dropdowns;
        return view('staff.index', compact('staff', 'dropdowns','departments'));
    }

    public function create()
{
    $departments = \App\Models\Department::with('section')->get();

    $departmentOptions = $departments->mapWithKeys(function ($department) {
        return [$department->id => $department->name . ($department->section ? ' - ' . $department->section->name : '')];
    });

    $positions = StaffPosition::all()->pluck('name', 'id'); // Obtener todas las posiciones del personal

    $fields = [
        ['name' => 'name', 'label' => 'Name', 'type' => 'text'],
        ['name' => 'surname', 'label' => 'Surname', 'type' => 'text'],
        ['name' => 'department_id', 'label' => 'Department', 'type' => 'select', 'options' => $departmentOptions],
        ['name' => 'positions', 'label' => 'Positions', 'type' => 'select', 'options' => $positions, 'multiple' => true], // Agregar 'multiple' => true si se permite seleccionar múltiples posiciones
        ['name' => 'url_image', 'label' => 'Profile Image', 'type' => 'file']
    ];

    $dropdowns = $this->dropdowns;
    return view('staff.create', compact('positions', 'dropdowns', 'fields'));
}

    


public function store(Request $request)
{
    Log::info('Request data', ['request' => $request->all()]);
    
    $request->validate([
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'department_id' => 'required|exists:departments,id',
        'positions.*' => 'exists:staff_positions,id',
        'url_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048'
    ]);    
    
    $staff = new Staff();
    $staff->name = $request->name;
    $staff->surname = $request->surname;
    $staff->department_id = $request->department_id;
    $staff->state = 1;

    if ($request->hasFile('url_image')) {
        $imageName = time().'.'.$request->file('url_image')->extension();  
        $request->file('url_image')->move(public_path('assets/img'), $imageName);
        $staff->url_image = $imageName;
    }
    
    Log::info('Staff data before save', ['staff' => $staff]);
    $staff->save();
    Log::info('Staff data after save', ['staff' => $staff]);
    
    $staff->staffPositions()->sync($request->positions);

    return redirect()->route('staff.index')->with('success', 'Staff created successfully.');
}


    public function show(Staff $staff)
    {
        $dropdowns = $this->dropdowns;
        return view('staff.show', compact('staff', 'dropdowns'));
    }

    public function edit(Staff $staff)
    {
        $positions = StaffPosition::all();
        $dropdowns = $this->dropdowns;
        return view('staff.edit', compact('staff', 'positions', 'dropdowns'));
    }

    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:staff,email,' . $staff->id,
            'positions' => 'required|array',
        ]);

        $staff->update($request->only(['name', 'email']));
        $staff->positions()->sync($request->positions);

        return redirect()->route('staff.index')->with('success', 'Staff updated successfully.');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Staff deleted successfully.');
    }
}
