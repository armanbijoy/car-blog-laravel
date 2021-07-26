<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $name =  ['john','Michael','David'];
        return view('about')->with('name',$name);
    }
}
