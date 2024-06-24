<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $latestPosts = Post::latest()->take(3)->get();
        return view('index', compact('latestPosts'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function admission()
    {
        return view('admission');
    }

    public function allPosts()
    {
        $posts = Post::latest()->paginate(10); // Paginación para mostrar todos los posts
        return view('posts.all-posts', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with(['user', 'imagePosts', 'documentPosts', 'videoPosts'])->findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
