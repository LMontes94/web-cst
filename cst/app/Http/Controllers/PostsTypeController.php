<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PostType;
use Illuminate\Http\Request;
use App\Helpers\Dropdown;

class PostsTypeController extends Controller
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
        $postTypes = PostType::all();
        $dropdowns = $this->dropdowns;
        return view('post_type.index', compact('postTypes', 'dropdowns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dropdowns = $this->dropdowns;
        return view('post_type.create', compact('dropdowns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $postType = new PostType([
            'name' => $request->name,
            'state' => 1, // Asignando el valor 1 a la propiedad state
        ]);
        $postType->save();

        return redirect()->route('postType.index')->with('success', 'Post Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PostType $postType)
    {
        $dropdowns = $this->dropdowns;
        return view('post_type.show', compact('postType', 'dropdowns'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostType $postType)
    {
        $dropdowns = $this->dropdowns;
        return view('post_type.edit', compact('postType', 'dropdowns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostType $postType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $postType->update([
            'name' => $request->name,
        ]);

        return redirect()->route('postType.index')->with('success', 'Post Type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostType $postType)
    {
        $postType->delete();

        return redirect()->route('userType.index')->with('success', 'Post Type deleted successfully.');
    }
}
