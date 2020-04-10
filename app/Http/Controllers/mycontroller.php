<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    // function index()
    // {
    // 	$project = \App\project::all();
    // 	return view('display',compact('project'));
    // }
    function create()
    {
    	return view('form');
    }
    function store(Request $req)
    {
    $p=new\App\project;
    $pname=$req->name;
    $pdescrip=$req->desription;
    $p->name=$pname;
    $p->desription=$pdescrip;
    $p->save();
    return "success";
    }
}
