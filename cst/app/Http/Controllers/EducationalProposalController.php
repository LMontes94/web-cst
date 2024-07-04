<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Traits\FetchPostsTrait;
use Illuminate\Http\Request;

class EducationalProposalController extends Controller
{
    use FetchPostsTrait;
    public function ourLevels()
    {
        $latestPosts = Post::latest()->take(3)->get();
        return view('educationalProposal.ourLevels.levels', compact('latestPosts'));
    }
    public function english()
    {
        $latestPosts = $this->getLatestPosts('Inglés');
        return view('educationalProposal.english', compact('latestPosts'));
    }
    public function ateneo()
    {
        $latestPosts = Post::latest()->take(3)->get();
        return view('educationalProposal.ateneo', compact('latestPosts'));
    }

    public function pastoral()
    {
        $latestPosts = Post::latest()->take(3)->get();
        return view('educationalProposal.pastoral', compact('latestPosts'));
    }
}
