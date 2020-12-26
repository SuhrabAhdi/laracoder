<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    
public function index($name="Milestone"){



    return view("test",compact("name"));
}



}
