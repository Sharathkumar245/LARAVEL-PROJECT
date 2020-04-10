<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datastorages extends Controller
{
    function store(Request $req)
    {
        $user = $req->user;
        $email = $req->email;
        $password = $req->pwd;
        
        $cd = new \App\customersdata;
        $cd->user = $user;
        $cd->email = $email;
        $cd->password = $password;
        $cd->save();
        return view('success');
    }
}
