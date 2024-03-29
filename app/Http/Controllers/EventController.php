<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
//erro pode estar bem aqui
class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('welcome',[ 'events' =>  $events ]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request){
        $event=new Event;

        $event->title=$request->title;
        $event->city=$request->city;
        $event->private=$request->private;
        $event->description=$request->description;
        $event->save();
        return redirect('/')->wiht('msg','Evento criado com sucesso');

    }
    public function show($id){
        $event=Event::findOrFail($id);
        //possivelmente cria um id
        return view('events.show',['event'=> $event]);
    }

}

