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
}
