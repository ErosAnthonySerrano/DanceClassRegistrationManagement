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
}
