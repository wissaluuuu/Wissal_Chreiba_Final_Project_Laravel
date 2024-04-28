<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class showcontroller extends Controller
{
    public function index(){
        $projects=Project::all();
        $ownprojects = Project::where('user_id', Auth::id())->get();
        dd($ownprojects);
        return view('dashboard.show' ,compact('projects', 'ownprojects'));
    }
}
