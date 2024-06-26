<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\FetchPostsTrait;
use Illuminate\Http\Request;

class SecundariaController extends Controller
{
    use FetchPostsTrait;
    public function secundaria()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.secundaria', compact('latestPosts'));
    }
    public function team()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.team', compact('latestPosts'));
    }
    public function studentCouncil()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.student-council', compact('latestPosts'));
    }
    public function guidanceTeam()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.guidance-team', compact('latestPosts'));
    }
    public function workshop()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.workshops', compact('latestPosts'));
    }
    public function sample()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.samples', compact('latestPosts'));
    }
    public function output()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.output', compact('latestPosts'));
    }
    public function physicalEducation()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.physical-education', compact('latestPosts'));
    }
    public function english()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.english', compact('latestPosts'));
    }
    public function document()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.document', compact('latestPosts'));
    }
    public function regulation()
    {
        $latestPosts = $this->getLatestPosts('Nivel Secundaria');
        return view('educationalProposal.ourLevels.secundaria.regulations', compact('latestPosts'));
    }

    public function allPosts()
    {
        $posts = $this->fetchPostsBySection('Nivel Secundaria', 10);
        return view('posts.all-posts-secundaria', compact('posts'));
    }
}
