<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\StaffPosition;
use Illuminate\Http\Request;
use App\Helpers\Dropdown;

class StaffController extends Controller
{
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = Dropdown::getMenu();
    }

    public function index()
    {
        $staff = Staff::all();
        $dropdowns = $this->dropdowns;
        return view('staff.index', compact('staff', 'dropdowns'));
    }

    public function create()
    {
        $positions = StaffPosition::all();
        $dropdowns = $this->dropdowns;
        return view('staff.create', compact('positions', 'dropdowns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:staff',
            'positions' => 'required|array',
        ]);

        $staff = Staff::create($request->only(['name', 'email']));
        $staff->positions()->sync($request->positions);

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
