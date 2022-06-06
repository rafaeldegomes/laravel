<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Produts;

class EventController extends Controller
{
    
    public function index() {

        $events = Event::all();

        return view('welcome',['events' => $events] );

    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        

        $event->save();

        return redirect('/');
    }
}
