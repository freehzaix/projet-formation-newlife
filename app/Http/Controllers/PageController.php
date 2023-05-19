<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Afficer la vue index
    public function index(){
        return view('index');
    }
    
}
