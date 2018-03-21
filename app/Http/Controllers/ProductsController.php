<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $product = Product::all()->where();
        return view('about', compact('product'));
    }
}
