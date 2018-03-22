<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $cc = 0;
        foreach ($product as $count){
            $category_name = Category::all()->where('id',$count['Category_id'])->pluck('name');
            $product[$cc]['C_name'] = $category_name->first();
            $cc++;
        }
        return view('services', compact('product'));
    }

    public function detail()
    {
        return view('single');
    }
}
