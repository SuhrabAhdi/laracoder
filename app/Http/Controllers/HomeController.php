<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

public function index($name='Homepage'){

    return view('contact_us');
}

}
