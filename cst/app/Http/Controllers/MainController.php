<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Mail\ContactFormMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function store(EmailRequest $request){
        $details = [
            'name' => $request->name,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'message' => $request->message,
        ];
        Mail::to('soporte@colegiosteresita.edu.ar')->send(new ContactFormMail($details));
        return redirect()->back()->with('success', '¡Gracias por contactarnos! Tu mensaje ha sido enviado correctamente.');
    }
}
