<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function ejemplo(){
        return view('ejemplo');
    }
    public function abms(){
        return view('abms');
    }
}
