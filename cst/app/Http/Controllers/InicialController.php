<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Traits\FetchPostsTrait;
use Illuminate\Http\Request;

class InicialController extends Controller
{
    use FetchPostsTrait;

    public function inicial()
    {
        $latestPosts = $this->getLatestPosts('Nivel Inicial');
        return view('educationalProposal.ourLevels.inicial.inicial', compact('latestPosts'));
    }

    public function science()
    {
        $latestPosts = $this->getLatestPosts('Nivel Inicial');
        return view('educationalProposal.ourLevels.inicial.science', compact('latestPosts'));
    }

    public function physicalEducation()
    {
        $latestPosts = $this->getLatestPosts('Nivel Inicial');
        return view('educationalProposal.ourLevels.inicial.science', compact('latestPosts'));
    }

    public function music()
    {
        $latestPosts = $this->getLatestPosts('Nivel Inicial');
        return view('educationalProposal.ourLevels.inicial.music', compact('latestPosts'));
    }

    public function english()
    {
        $latestPosts = $this->getLatestPosts('Nivel Inicial');
        return view('educationalProposal.ourLevels.inicial.english', compact('latestPosts'));
    }

    public function document()
    {
        $latestPosts = $this->getLatestPosts('Nivel Inicial');
        return view('educationalProposal.ourLevels.inicial.document', compact('latestPosts'));
    }

    public function allPosts()
    {
        $posts = $this->fetchPostsBySection('Nivel Inicial', 10);
        return view('posts.all-posts-inicial', compact('posts'));
    }
}
