<?php

namespace App\Http\Controllers;

use App\Helpers\Dropdown;
use App\Models\Department;
use App\Models\Section;
use App\Traits\RecordsUserActivity;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use RecordsUserActivity;
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = Dropdown::getMenu();
    }

    public function index()
    {
        $departments = Department::with('section')->get();
        $dropdowns = $this->dropdowns;
        return view('department.index', compact('departments', 'dropdowns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = \App\Models\Section::all()->pluck('name', 'id');

        $fields = [
                    ['name' => 'name', 'label' => 'Name', 'type' => 'text'],
                    ['name' => 'section_id', 'label' => 'Section', 'type' => 'select', 'options' => $sections],
                ];
        $dropdowns = $this->dropdowns;
        return view('department.create', compact('dropdowns','fields'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'section_id' => 'required|exists:sections,id',
        ]);

        $department = new Department([
            'name'=> $request->name,
            'section_id' => $request->section_id,
            'state' => 1
        ]);
        $department->save();
        $this->recordActivity('Creó un departamento', 'Departamento: ' . $department->name);
        return redirect()->route('department.index')->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        $fields = [
            ['name' => 'id', 'label' => 'ID'],
            ['name' => 'name', 'label' => 'Name'],
            ['name' => 'state', 'label' => 'Estado'],
            ['name' => 'name', 'label' => 'Section Name', 'relation' => 'section'],
        ];

        $dropdowns = $this->dropdowns;
        return view('department.show', compact('department', 'dropdowns','fields'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        $sections = Section::all()->pluck('name', 'id');
        
        $fields = [
            ['name' => 'name', 'label' => 'Name', 'type' => 'text'],
            ['name' => 'section_id', 'label' => 'Section', 'type' => 'select', 'options' => $sections],
        ];

        $dropdowns = $this->dropdowns;
        return view('department.edit', compact('department', 'dropdowns','fields'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'section_id' => 'required|exists:sections,id',
        ]);

        $department->update([
            'name' => $request->name,
            'section_id' => $request->section_id,
        ]);
        $this->recordActivity('Editó un departamento', 'Departamento: ' . $department->name);
        return redirect()->route('department.index')->with('success', 'Department updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        $this->recordActivity('Eliminó un departamento', 'Departamento: ' . $department->name);
        return redirect()->route('department.index')->with('success', 'Department deleted successfully.');
    }
}
