<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store( request $request){
        request()->validate([
            "name" => "required",
        ]);
        Team::create([
            "name"=> $request->name,
        ]);
    }
}
