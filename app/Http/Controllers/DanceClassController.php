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
        
        DanceClassStudent::create(['name' => $request->name, 'age' => $request->age, 'typeofdance' => $request->typeofdance, 'levelofdance' => $request->levelofdance, 'contactnumber' => $request->contactnumber]);
     
        return redirect()->route('dclass.index')->with('success', 'New Dancer has been added');

    }

    public function edit(DanceClassStudent $danceclass){
        return view('edit')->with("danceclass",$danceclass);
    }


     public function update(Request $request, DanceClassStudent $danceclass){
         $danceclass->update(['name' => $request->name, 'age' => $request->age, 'typeofdance' => $request->typeofdance, 'levelofdance' => $request->levelofdance, 'contactnumber' => $request->contactnumber, 'created_at' => now()]);
         return redirect()->route('dclass.index')->with('success','Dancer Info has been Updated!');
     }
     
     public function destroy(DanceClassStudent $danceclass){
         
        
        $danceclass->delete();
        return redirect()->route('dclass.index')->with('success','Dancer Info has been Deleted!');
        

     }

     
    
 

}
