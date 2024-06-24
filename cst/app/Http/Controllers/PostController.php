<?php

namespace App\Http\Controllers;

use App\Helpers\Dropdown;
use App\Http\Requests\PostRequest;
use App\Models\Department;
use App\Models\Post;
use App\Models\PostType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = Dropdown::getMenu();
    }

    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 25);
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
    $postTypes = PostType::all()->pluck('name', 'id');
    $departments = Department::with('section')->get();
    $dropdowns = $this->dropdowns;
    return view('posts.create', compact('postTypes', 'departments','dropdowns'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        // Extraer los datos del request
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        $data['state'] = 1;
    
        // Crear el post sin los departamentos
        $post = Post::create([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'description' => $data['description'],
            'post_type_id' => $data['post_type_id'],
            'discharge_date' => $data['discharge_date'],
            'date' => $data['date'],
            'user_id' => $data['user_id'],
            'state' => $data['state'],
        ]);
    
        // Manejar la relación de departamentos
        if ($request->has('departments')) {
            $post->departments()->sync($request->departments);
        }
    
        // Manejar las imágenes
        if ($request->hasFile('image_files')) {
            foreach ($request->file('image_files') as $file) {
                $filename = $file->store('public/images');
                $post->imagePosts()->create(['path' => $filename]);
            }
        }
    
        // Manejar los documentos
        if ($request->hasFile('document_files')) {
            foreach ($request->file('document_files') as $file) {
                $filename = $file->store('public/documents');
                $post->documentPosts()->create(['path' => $filename]);
            }
        }
    
        // Manejar los videos
        if ($request->hasFile('video_files')) {
            foreach ($request->file('video_files') as $file) {
                $filename = $file->store('public/videos');
                $post->videoPosts()->create(['path' => $filename]);
            }
        }
    
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
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
    public function edit(Post $post)
    {
        
        // Cargar las relaciones necesarias
        $post->load('departments', 'postType', 'imagePosts', 'documentPosts', 'videoPosts');
        $post->discharge_date = Carbon::parse($post->discharge_date);
        $post->date = Carbon::parse($post->date);

        // Obtener los departamentos con sus secciones
        $departments = \App\Models\Department::with('section')->get();
        $departmentOptions = $departments->mapWithKeys(function ($department) {
            return [$department->id => $department->name . ($department->section ? ' - ' . $department->section->name : '')];
        });
    
        // Obtener los tipos de posts
        $postTypes = PostType::all()->pluck('name', 'id');
        $dropdowns = $this->dropdowns;
        return view('posts.edit', compact('post', 'departmentOptions', 'postTypes','dropdowns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        // Extraer los datos del request
        $data = $request->validated();
    
        // Actualizar el post
        $post->update([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'description' => $data['description'],
            'post_type_id' => $data['post_type_id'],
            'discharge_date' => $data['discharge_date'],
            'date' => $data['date'],
            'user_id' => Auth::id(), // Asegurarse de que el usuario es el actual
            'state' => 1, // Mantener el estado como 1
        ]);
    
        // Manejar la relación de departamentos
        if ($request->has('departments')) {
            $post->departments()->sync($request->departments);
        } else {
            $post->departments()->sync([]); // Si no se proporcionan departamentos, eliminar las relaciones existentes
        }
    
        // Manejar imágenes
        if ($request->hasFile('image_files')) {
            foreach ($request->file('image_files') as $file) {
                $filename = $file->store('public/images');
                $post->imagePosts()->create(['url_img' => $filename, 'state' => 1]);
            }
        }
    
        // Manejar documentos
        if ($request->hasFile('document_files')) {
            // Subir y guardar los nuevos documentos
            foreach ($request->file('document_files') as $file) {
                $filename = $file->store('public/documents');
                $post->documentPosts()->create(['url_doc' => $filename, 'state' => 1]);
            }
        }
    
        // Manejar videos
        if ($request->hasFile('video_files')) {
            // Subir y guardar los nuevos videos
            foreach ($request->file('video_files') as $file) {
                $filename = $file->store('public/videos');
                $post->videoPosts()->create(['url_video' => $filename, 'state' => 1]);
            }
        }
    
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
{
    $post->delete();
    return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
}
}
