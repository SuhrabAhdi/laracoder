<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bladecontroller extends Controller
{
   public function index($var="Miley"){
      
       return view('home',
       [
           'name'=>$var,
           'login'=>false,
           'roots'=>[1,2,3,4,5,6]
           
        ]
    );
   }
public function service(){
    return view('service');
}

}
