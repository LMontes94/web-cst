<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\FetchPostsTrait;
use Illuminate\Http\Request;

class PrimariaController extends Controller
{
    use FetchPostsTrait;
    public function primaria()
    {
        $latestPosts = $this->getLatestPosts('Nivel Primario');
        return view('educationalProposal.ourLevels.primaria.primaria', compact('latestPosts'));
    }
    public function team()
    {
        $latestPosts = $this->getLatestPosts('Nivel Primario');
        return view('educationalProposal.ourLevels.primaria.team', compact('latestPosts'));
    }
    public function english()
    {
        $latestPosts = $this->getLatestPosts('Nivel Primario');
        return view('educationalProposal.ourLevels.primaria.english', compact('latestPosts'));
    }
    public function event()
    {
        $latestPosts = $this->getLatestPosts('Nivel Primario');
        return view('educationalProposal.ourLevels.primaria.events', compact('latestPosts'));
    }

    public function allPosts()
    {
        $posts = $this->fetchPostsBySection('Nivel Primario', 10);
        return view('posts.all-posts-primaria', compact('posts'));
    }
}
