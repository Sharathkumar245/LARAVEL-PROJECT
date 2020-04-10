<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laptops extends Controller
{
    function apple()
    {
        return view('apple');
    }
    function dell()
    {
        return view('dell');
    }
    function acer()
    {
        return view('acer');
    }
}
