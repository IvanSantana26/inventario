<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController2 extends Controller
{
    public function usa_control()
    {
    	return view('demo_control');
    }

    public function usa_control_y_param($var)
    {
    	return view('demo2_')->with('variable',$var);
    }
}
