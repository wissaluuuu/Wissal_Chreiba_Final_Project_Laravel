<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class TacheController extends Controller
{
    public function index(){
        return view('espaceTravail');
    }
    public function store(request $request)
    {
        $request->validate([
            "name" => "required",
            'description' => 'nullable|string',
            'status' => 'nullable|string',
            "priority" => "nullable|in:low,medium,high",
            "dateEnd" => "required",
            "dateStart" => "required",
            // "project_id" => "required",
        ]);
        $createdBy = Auth::id();
        Tache::create([
            'user_id' => $request->user()->id,
            "name" => $request->name,
            "description" => $request->description,
            "status" => $request->status,
            "priority" => $request->priority ?? 'medium',
            "dateEnd" => $request->dateEnd,
            "dateStart" => $request->dateStart,
            "project_id" => $createdBy,
        ]);
        // dd($request);
        // dd($request);
        
        return back();
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            'description' => 'nullable|string',
            "priority" => "required",
            "due_date" => "required",
        ]);

        $tache = Tache::findOrFail($id);
        if ($request->has('project_id')) {
            $tache->project_id = $request->project_id;
        }

        $tache->user_id = Auth::id();
        $tache->save();
        return redirect()->back();
    }
    
    public function show($projectId)
    {
        $project = Project::findOrFail($projectId);
        $tasks = Tache::where('project_id', $projectId)->get();
        return view('project.tasks', compact('project', 'tasks'));
    }
}
