<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
       $posts = DB::select('select * from posts');
       dd($posts);
    }
}
