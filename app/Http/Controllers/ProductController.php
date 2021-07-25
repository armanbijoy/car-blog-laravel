<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        $title = 'Welcome to laravel 8';
        $des = 'Arman Bijoy';
        
        
        return view('products.index')->with('data', $data );
    
    }

    public function about()
    {
        return 'About us page';
    }

    public function show($name){

        $data = [
            'productOne' => 'Iphone',
            'productTwo' => 'Samsung'
        ];

        return view('products.index',[
            'products'=> $data[$name] ?? 'Product ' . $name . ' doesnt exist'
        ]);

    }
}
