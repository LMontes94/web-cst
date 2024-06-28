<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StaffPosition;
use App\Traits\RecordsUserActivity;
use Illuminate\Http\Request;
use App\Helpers\Dropdown;

class StaffPositionController extends Controller
{
    use RecordsUserActivity;
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = Dropdown::getMenu();
    }

    public function index()
    {
        $positions = StaffPosition::all();
        $dropdowns = $this->dropdowns;
        return view('staff_positions.index', compact('positions', 'dropdowns'));
    }

    public function create()
    {
        $dropdowns = $this->dropdowns;
        return view('staff_positions.create', compact('dropdowns'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $position = new StaffPosition([
            'name' => $request->name,
            'state' => 1,
        ]);

        $position->save();
        $this->recordActivity('Se creo un nuevo cargo', 'Cargo: ' . $position->name);
        return redirect()->route('staff_positions.index')->with('success', 'Position created successfully.');
    }

    public function show(StaffPosition $staffPosition)
    {
        $dropdowns = $this->dropdowns;
        return view('staff_positions.show', compact('staffPosition', 'dropdowns'));
    }

    public function edit(StaffPosition $staffPosition)
    {
        $dropdowns = $this->dropdowns;
        return view('staff_positions.edit', compact('staffPosition', 'dropdowns'));
    }

    public function update(Request $request, StaffPosition $staffPosition)
    {
        $request->validate(['name' => 'required|string|max:255']);

        $staffPosition->update($request->only('name'));
        $this->recordActivity('Se edito un nuevo cargo', 'Cargo: ' . $staffPosition->name);
        return redirect()->route('staff_positions.index')->with('success', 'Position updated successfully.');
    }

    public function destroy(StaffPosition $staffPosition)
    {
        $this->recordActivity('Se elimino un nuevo cargo', 'Cargo: ' . $staffPosition->name);
        $staffPosition->delete();
        return redirect()->route('staff_positions.index')->with('success', 'Position deleted successfully.');
    }
}
