<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\StaffPosition;
use Illuminate\Http\Request;
use App\Helpers\Dropdown;
use App\Http\Requests\StaffRequest;
use App\Models\Department;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = Dropdown::getMenu();
    }

    public function index()
    {
        $positions = StaffPosition::all()->pluck('name', 'id');
        $departments = Department::all()->pluck('name', 'id');
        $staff = Staff::with(['department.section', 'staffPositions'])->get(); // Cargar relaciones

        $dropdowns = $this->dropdowns;
        return view('staff.index', compact('staff', 'dropdowns', 'departments', 'positions'));
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
        return view('staff.create', compact('dropdowns', 'fields'));
    }

    public function store(StaffRequest $request)
    {
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->surname = $request->surname;
        $staff->department_id = $request->department_id;
        $staff->state = 1;

        if ($request->hasFile('url_image')) {
            $imageName = time() . '.' . $request->file('url_image')->extension();
            $request->file('url_image')->storeAs('assets/img', $imageName);
            $staff->url_image = $imageName;
        }
        $staff->save();
        $staff->staffPositions()->sync($request->positions);

        return redirect()->route('staff.index')->with('success', 'Staff created successfully.');
    }


    public function show(Staff $staff)
    {
        // Cargar las relaciones necesarias
        $staff->load('department', 'department.section', 'staffPositions');

        // Obtener los nombres de las posiciones del personal
        $positions = $staff->staffPositions->pluck('name')->toArray();
        $positionsString = implode(', ', $positions);
        // Definir los campos que se mostrarán en la vista
        $department = $staff->department->name ?? 'N/A';
        $section = $staff->department->section->name ?? 'N/A';
        $fields = [
            ['name' => 'id', 'label' => 'ID', 'value' => $staff->id],
            ['name' => 'name', 'label' => 'Name', 'value' => $staff->name],
            ['name' => 'surname', 'label' => 'Surname', 'value' => $staff->surname],
            ['name' => 'department', 'label' => 'Department', 'value' => $department],
            ['name' => 'section', 'label' => 'Section', 'value' => $section],
            ['name' => 'positions', 'label' => 'Positions', 'value' => $positionsString],
            ['name' => 'state', 'label' => 'Estado', 'value' => $staff->state ? 'Habilitado' : 'Deshabilitado'],
            ['name' => 'url_image', 'label' => 'Image', 'value' => $staff->url_image ? asset('assets/img/' . $staff->url_image) : 'N/A']
        ];

        $dropdowns = $this->dropdowns;

        return view('staff.show', compact('staff', 'dropdowns', 'fields'));
    }

    public function edit(Staff $staff)
    {
        $departments = \App\Models\Department::with('section')->get();

        $departmentOptions = $departments->mapWithKeys(function ($department) {
            return [$department->id => $department->name . ($department->section ? ' - ' . $department->section->name : '')];
        });

        $positions = StaffPosition::all()->pluck('name', 'id');
        $staffPositions = $staff->staffPositions->pluck('id')->toArray();
        $fields = [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text', 'value' => $staff->name],
            ['name' => 'surname', 'label' => 'Surname', 'type' => 'text', 'value' => $staff->surname],
            ['name' => 'department_id', 'label' => 'Department', 'type' => 'select', 'options' => $departmentOptions, 'value' => $staff->department_id],
            ['name' => 'positions', 'label' => 'Positions', 'type' => 'select', 'options' => $positions, 'value' => $staffPositions, 'multiple' => true],
            ['name' => 'url_image', 'label' => 'Profile Image', 'type' => 'file', 'value' => $staff->url_image ? asset('assets/img/' . $staff->url_image) : null]
        ];
        $dropdowns = $this->dropdowns;
        return view('staff.edit', compact('staff', 'fields', 'dropdowns'));
    }

    public function update(StaffRequest $request, Staff $staff)
    {
        $staff->name = $request->name;
        $staff->surname = $request->surname;
        $staff->department_id = $request->department_id;
        $staff->state = 1;

        if ($request->hasFile('url_image')) {
            // Eliminamos la imagen anterior si existe
            if ($staff->url_image) {
                Storage::delete('public/assets/img/' . $staff->url_image);
            }

            // Subimos la nueva imagen
            $imageName = time() . '.' . $request->file('url_image')->extension();
            $request->file('url_image')->storeAs('public/assets/img', $imageName);
            $staff->url_image = $imageName;
        }
        $staff->save();
        $staff->staffPositions()->sync($request->positions);

        return redirect()->route('staff.index')->with('success', 'Staff updated successfully.');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Staff deleted successfully.');
    }
}
