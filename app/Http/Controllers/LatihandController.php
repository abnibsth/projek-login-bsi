<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LatihandController extends Controller
{
    public function getTabel()
    {
    return view('getTabel');
    }
    
    public function getFrom()
    {
    return view('getFrom');
    }
    
}