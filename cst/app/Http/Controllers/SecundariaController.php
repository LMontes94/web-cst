<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecundariaController extends Controller
{
    public function secundaria()
    {
        return view('educationalProposal.ourLevels.secundaria.secundaria');
    }
    public function team()
    {
        return view('educationalProposal.ourLevels.secundaria.team');
    }
    public function studentCouncil()
    {
        return view('educationalProposal.ourLevels.secundaria.student-council');
    }
    public function guidanceTeam()
    {
        return view('educationalProposal.ourLevels.secundaria.guidance-team');
    }
    public function workshop()
    {
        return view('educationalProposal.ourLevels.secundaria.workshops');
    }
    public function sample()
    {
        return view('educationalProposal.ourLevels.secundaria.samples');
    }
    public function output()
    {
        return view('educationalProposal.ourLevels.secundaria.output');
    }
    public function physicalEducation()
    {
        return view('educationalProposal.ourLevels.secundaria.physical-education');
    }
    public function english()
    {
        return view('educationalProposal.ourLevels.secundaria.english');
    }
    public function document()
    {
        return view('educationalProposal.ourLevels.secundaria.document');
    }
    public function regulation()
    {
        return view('educationalProposal.ourLevels.secundaria.regulations');
    }
}
