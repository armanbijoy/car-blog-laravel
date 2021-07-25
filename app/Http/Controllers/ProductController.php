<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        print_r(route('products'));
        return view('products.index');
    
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
