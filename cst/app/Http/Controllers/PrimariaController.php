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
}
