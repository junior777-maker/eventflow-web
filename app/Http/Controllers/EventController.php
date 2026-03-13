<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('index', compact('events'));
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->name = $request->name;
        $event->date = $request->date;
        $event->price = $request->price;
        $event->lat = $request->lat;
        $event->lng = $request->lng;
        $event->save();

        return redirect()->route('home');
    }
}