<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shacontroller extends Controller
{
    function access(Request $req)
    {
        $user = $req->user;
        $password = $req->pass;
        return view("loginaccess",compact($user, $password));
        $log = \App\customersdata::all();
        return view('loginaccess', [
            'logi'=> $log
        ]);
    }

}
