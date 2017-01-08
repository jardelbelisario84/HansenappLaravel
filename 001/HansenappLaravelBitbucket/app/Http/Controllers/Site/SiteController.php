<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function getIndex()
    {
    	$titulo = "Projeto HansenApp";
    	return view('site.templatt',compact('titulo'));
    }

    public function getSenha()
    {
    	$senha = \Hash::make("jhsb84");
    	echo $senha;
    }

    public function missingMethod($parameters =  array())
    {
        //return view('site.errors.404');
    	return view('site.templatt');
    }
}
