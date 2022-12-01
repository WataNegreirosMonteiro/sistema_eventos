<?php

namespace App\Http\Controllers;
use App\Models\Event;

class EventController extends Controller
{
   public function index(){
    $events = Event::all();
    return view('home', ['events' => $events]);
   }

   public function create(){
    return view('events.create');
   }

//    public function store($request){
//     // $event = new Event;

//     // $event->title = $request -> title;
//     // $event->city = $request -> city;
//     // $event->description = $request -> description;

//     // $event->save();
//     // return redirect('/');
//    }
}
