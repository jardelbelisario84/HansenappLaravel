<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Posts extends Controller
{
    

    public function index(){
       return \App\Post::all();
    }

}
