<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller

{
    public function index(){
        return view('EspaceTravail');
    }
    public function store(Request $request)
    {
        request()->validate([
            "name" => "required",
            "description" => "required",
            "due_date" => "required",
        ]);
        Project::create([
            "name"=> $request->name,
            "description"=> $request->description,
            "due_date"=> $request->due_date,

        ]);
        return view('projects');

    }
    public function show (){
        return view('projects');
    }
}
