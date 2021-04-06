<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {                
        return view('index', [
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }
    public function show($id)
    {
        $products = Product::where('category_id', $id)->get();
        $categories = Category::all();
        return view('index', compact('products', 'categories'));
    }
}
