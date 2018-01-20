<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tugas;

class testController extends Controller
{
    public function asiswa(){
    $c=tugas::all();        
    return view('data',compact('c')); 
}
}
