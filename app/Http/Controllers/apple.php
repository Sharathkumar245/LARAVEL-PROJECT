<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apple extends Controller
{
    function under10K()
    {
        return view('under10k');
    }
}
