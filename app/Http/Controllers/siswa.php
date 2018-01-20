<?php

namespace App\Http\Controllers;
Use App\siswas;
use Illuminate\Http\Request;

class siswa extends Controller
{
     public function isi($value='')
    {
    	$siswas=siswa::all();
    	return view('controller', ['siswa' => $siswas])
    }
    }
