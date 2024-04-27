<?php

namespace App\Http\Controllers;

use App\Models\invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function joinProjectByToken($token)
    {
        $invitation = invitation::where('token', $token)->first();

        if (!$invitation) {
            abort(404); 
        }

        $invitation->project->users()->attach(Auth::id());

        $invitation->delete();

        // return redirect()->route('home')->with('success', 'welcome to the project');
    }
}
