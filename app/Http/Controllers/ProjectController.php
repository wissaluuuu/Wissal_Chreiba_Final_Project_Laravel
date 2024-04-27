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
        // $ownprojects = Project::where('user_id', Auth::id())->get();
        // dd($ownprojects);
        return view('projects', );
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
        $project = new Project();
        // $project = Project::where('user_id', Auth::id())->get();

        // dd($project);

        $project->name = $request->name;
        $project->description = $request->description;
        $project->due_date = $request->due_date;
        $project->user_id = Auth::id();

        $project->save();
        

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
