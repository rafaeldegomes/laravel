<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Produto;

class EventController extends Controller
{
    
    public function index() {

        $produtos = Produto::all();
        $events = Event::all();
        return view('welcome',['produtos' => $produtos, 'events' => $events] );
        
    }

    public function create() {
        $produtos = Produto::all();
        $events = Event::all();
        return view('events.create' , ['produtos' => $produtos, 'events' => $events]);
    }


    public function prod(Request $request){
    $produto = new Produto;

    $produto->nome = $request->nome;
   
    

    $produto->save();

    return redirect('/');
    }

    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        

        $event->save();

        return redirect('/');
    }
}
