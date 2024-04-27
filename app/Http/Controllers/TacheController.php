<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class TacheController extends Controller
{
    public function store(request $request)
    {
        dd($request);
        $request->validate([
            "name" => "required",
            'description' => 'nullable|string',
            "priority" => "nullable|in:low,medium,high",
            "dateEnd" => "required",
            "dateStart" => "required",
        ]);
        Tache::create([
            // 'user_id' => $request->user()->id,
            "name" => $request->name,
            "description" => $request->description,
            "priority" => $request->priority ?? 'medium',
            "dateEnd" => $request->dateEnd,
            "dateStart" => $request->dateStart,
            "project_id" => $request->project_id,
        ]);
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
    

}
