<?php

namespace App\Http\Controllers;
use App\DanceClassStudent;
use Illuminate\Http\Request;

class DanceClassController extends Controller
{
    public function index(){
        $danceclass = DanceClassStudent::all();
        
        return view('index', compact('danceclass','danceclass'));
    }

    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request){
        
        dclass::create(['name' => $request->name, 'age' => $request->age, 'typeofdance' => $request->typeofdance, 'levelofdance' => $request->levelofdance]);
        return redirect()->route('dclass.index')->withSuccess('New Dancer has been added');

    }

}
