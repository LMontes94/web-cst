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
}
