<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
class aditController extends Controller
{
    
   public function asiswa(){
    $q= siswa::all();        
    return view('layout.database',compact('q')); 
   }

}

