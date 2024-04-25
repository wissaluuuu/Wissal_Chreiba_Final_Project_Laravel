<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TacheController extends Controller
{
    public function store(request $request)
    {
        request()->validate([
            "name" => "required",
            // "due_date" => "required",
            'description' => 'nullable|string',

        ]);
        $createdBy = Auth::id();
        Tache::create([
            "name" => $request->name,
            "description" => $request->description,
            "created_by" => $createdBy,

        ]);
        return redirect()->back();
    }
}
