<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class InicialController extends Controller
{
    public function inicial()
    {
        $latestPosts = Post::whereHas('departments', function ($query) {
            $query->whereHas('section', function ($query) {
                $query->where('name', 'Nivel Inicial');
            });
        })
            ->latest()
            ->take(3)
            ->get();

        return view('educationalProposal.ourLevels.inicial.inicial', compact('latestPosts'));
    }
    public function science()
    {
        return view('educationalProposal.ourLevels.inicial.science');
    }
    public function physicalEducation()
    {
        return view('educationalProposal.ourLevels.inicial.science');
    }
    public function music()
    {
        return view('educationalProposal.ourLevels.inicial.music');
    }
    public function english()
    {
        return view('educationalProposal.ourLevels.inicial.english');
    }
    public function document()
    {
        return view('educationalProposal.ourLevels.inicial.document');
    }
}
