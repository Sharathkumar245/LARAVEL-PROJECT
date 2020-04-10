<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fcades\URL;
use App\Http\Controllers\controller;
class upload extends Controller
{
    function index(Request $req)
    {
        $path =  $req->file('upfile')->store('improvements');
        return view('upfile');
    }
}
