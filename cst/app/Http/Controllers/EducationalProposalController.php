<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationalProposalController extends Controller
{
    public function ourLevels()
    {
        return view('educationalProposal.ourLevels.levels');
    }
    public function english()
    {
        return view('educationalProposal.english');
    }
    public function ateneo()
    {
        return view('educationalProposal.ateneo');
    }
}
