<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at')->take(8)->get();
        // $products = Product::where('id',5)->first();
        // foreach ($products as $product) {
        //     echo 'Title: '.$product->title;
        //     echo "<br>";
        // }

        return view('home.index',[
            'products' => $products
        ]);
    }
    
    public function showAllProducts(){
        // $products = Product::all()->paginate(2);
        // $products = Product::orderBy('created_at')->take()->paginate(2);
        $products = Product::paginate(3);

        return view('home.allProducts',[
            'products' => $products
        ]);
    }
}
