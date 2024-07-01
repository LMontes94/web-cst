<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Post;
use App\Models\PostType;
use App\Models\Section;
use App\Models\Session;
use App\Models\SessionLog;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $dropdowns;
    public function __construct()
    {
        $this->dropdowns = [
            [
            'title' => 'ACTIVIDAD',
            'icon' => 'fas fa-fw fa-table',
            'items' => [
                ['label' => 'Listado completo', 'link' => route('activities')],
            ]
            ],
            [
                'title' => 'SESIONES',
                'icon' => 'fas fa-fw fa-table',
                'items' => [
                    ['label' => 'Listado completo', 'link' => route('sessions')],
                ]
                ],
        ];
    }
    public function dashboard(){
        $userCount = User::count();
        $sectionCount = Section::count();
        $departmentCount = Department::count();
        $pubTypeCount = PostType::count();
        $publicationCount = Post::count();

        return view('dashboard', compact('userCount', 'sectionCount', 'departmentCount', 'pubTypeCount', 'publicationCount'));
   
    }
    public function operacion(){
        $dropdowns = $this->dropdowns; 
        return view('operaciones',compact('dropdowns'));
    }
    public function abms(){
        return view('abms');
    }

    public function activity(){ 
        $dropdowns = $this->dropdowns; 
        return view('activity',compact('dropdowns'));
    }

    public function sessions()
    {
        $sessions = SessionLog::with('user')->paginate(10);
        $dropdowns = $this->dropdowns; 
        return view('sessions', compact('sessions','dropdowns'));
    }
}
