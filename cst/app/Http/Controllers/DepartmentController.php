<?php

namespace App\Http\Controllers;

use App\Helpers\Dropdown;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
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

        return redirect()->route('department.index')->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        $dropdowns = $this->dropdowns;
        return view('department.show', compact('department', 'dropdowns'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        $dropdowns = $this->dropdowns;
        return view('department.show', compact('department', 'dropdowns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
