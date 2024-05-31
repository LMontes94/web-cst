<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimariaController extends Controller
{
    public function primaria()
    {
        return view('educationalProposal.ourLevels.primaria.primaria');
    }
    public function team()
    {
        return view('educationalProposal.ourLevels.primaria.team');
    }
    public function english()
    {
        return view('educationalProposal.ourLevels.primaria.english');
    }
    public function event()
    {
        return view('educationalProposal.ourLevels.primaria.events');
    }
}
