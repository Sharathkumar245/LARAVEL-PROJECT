<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    function store(Request $req)
    {
        $user = $req->user;
        $password = $req->pass;
        return view("regusersdata",compact($user, $password));
    }
    function index()
    {
        $data = \App\customersdata::all();
        return view('regusersdata', [
            'usda'=> $data
        ]);
    }
}
