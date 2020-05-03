<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function usa_control()
    {
    	return view('demo_control');
    }

    public function controllerCaseTwo($var)
    {
    	return view('demo2_control')->with('variable',$var);
    }
    

}
