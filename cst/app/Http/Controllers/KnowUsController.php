<?php

namespace App\Http\Controllers;

use App\Models\Directivo;
use Illuminate\Http\Request;

class KnowUsController extends Controller
{
    public function staff()
    {
        $directivos = Directivo::all();
        return view('knowUs.staff', compact('directivos'));
    }
    public function generalLetter()
    {
        $directoraGral = Directivo::findOrFail(2);
        return view('knowUs.general-letter', compact('directoraGral'));
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
