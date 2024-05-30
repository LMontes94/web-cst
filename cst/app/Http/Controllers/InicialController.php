<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicialController extends Controller
{
    public function inicial()
    {
        return view('educationalProposal.ourLevels.inicial.inicial');
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
