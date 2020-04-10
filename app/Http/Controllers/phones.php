<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phones extends Controller
{
    function under10k()
    {
        return view('under10k');
    }
    function under20k()
    {
        return view('under20k');
    }
    function under30k()
    {
        return view('under30k');
    }
}
