<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    function showname($id){
       return view('sample',['f'=>$id]);
    }
}
