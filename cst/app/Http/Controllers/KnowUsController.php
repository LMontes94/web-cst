<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnowUsController extends Controller
{
    public function staff()
    {
        return view('knowUs.staff');
    }
    public function generalLetter()
    {
        return view('knowUs.general-letter');
    }
    public function definition()
    {
        return view('knowUs.definition');
    }
    public function history()
    {
        return view('knowUs.historia');
    }
    public function commitment()
    {
        return view('knowUs.commitment');
    }
}
