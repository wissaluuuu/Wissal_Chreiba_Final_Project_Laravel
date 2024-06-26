<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller

{
    public function index()
    {
        $projects=Project::all();
        $ownprojects = Project::where('user_id', Auth::id())->get();
        return view('projects', compact('ownprojects' , 'projects'));
    }
    public function store(Request $request)
    {
        // dd($request);
        request()->validate([
            "name" => "required",
            "description" => "required",
            "due_date" => "required",
        ]);
        $createdBy = Auth::id();
        Project::create([
            "name" => $request->name,
            "description" => $request->description,
            "due_date" => $request->due_date,
            "user_id" => $createdBy,

        ]);
        
        return redirect()->back()->with('success', 'Project created successfully.');
    }
    public function show(Project $project)
    {
        return view('EspaceTravail');
    }

    public function joinProject($projectId)
    {
        $project = Project::findOrFail($projectId);

        $userId = Auth::id();

        $project->members()->attach($userId, ['role' => 'member']);
        
        $project->save();

        return redirect()->route('dashboard', $projectId)->with('success', 'You have successfully joined the project.');
    }
    
}
