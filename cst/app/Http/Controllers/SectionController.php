<?php

namespace App\Http\Controllers;

use App\Helpers\Dropdown;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
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
        $sections = Section::all();
        $dropdowns = $this->dropdowns;
        return view('sections.index', compact('sections', 'dropdowns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dropdowns = $this->dropdowns;
        return view('sections.create', compact('dropdowns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $section = new Section([
            'name' => $request->name,
            'state' => 1,
        ]);
        $section->save();

        return redirect()->route('sections.index')->with('success', 'Seccion created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        $dropdowns = $this->dropdowns;
        return view('sections.show', compact('section', 'dropdowns'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        $dropdowns = $this->dropdowns;
        return view('sections.edit', compact('section', 'dropdowns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $section->update($request->only('name'));

        return redirect()->route('sections.index')->with('success', 'Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('sections.index')->with('success', 'Section deleted successfully.');
    }
}
