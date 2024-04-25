<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\cr;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('calendar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            "name" => $request->name,
            "dateStart" => $request->dateStart,
            "timeStart" => $request->timeStart,
            "dateEnd" => $request->dateEnd,
            "timeEnd" => $request->timeEnd
        ];

        Calendar::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendar $calendar)
    {
        //
        $events = Calendar::all()->map(function (Calendar $event) {
            $start = $event->dateStart . " " . $event->timeStart;
            $end = $event->dateEnd . " " . $event->timeEnd;
            return [
                "start" => $start,
                "end" => $end,
                "title" => $event->name,
                "color" => "#108ce5",
            ];
        });

        return response()->json([
            "events" => $events
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
}
