<?php

namespace App\Http\Controllers;

use App\Helpers\Dropdown;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = Dropdown::getMenu();
    }

    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 25); // 25 por defecto
        $search = $request->input('search', '');

        $posts = Post::with(['postType', 'imagePosts', 'documentPosts', 'videoPosts'])
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%")
                    ->orWhere('subtitle', 'like', "%{$search}%");
            })
            ->paginate($perPage);
        $dropdowns = $this->dropdowns;
        return view('posts.index', compact('posts', 'dropdowns', 'perPage', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
