<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('product.productlist', compact('product'));
    }

    public function detail($id)
    {
        $product = Product::all()->where('id',$id);
        $category_name = Category::all()->where('id',$product->first()['Category_id'])->pluck('name');
        $store_name = Store::all()->where('id',$product->first()['store_id'])->pluck('name');
        $product->first()['C_name'] = $category_name->first();
        $product->first()['S_name'] = $store_name->first();
        return view('product.productdetail',compact('product'));
    }

    public function search(Request $request)
    {
        $search = $request['name'];

        $category_id = Category::where('name','like',"%{$search}%")->get()->pluck('id');

        if ($category_id->count()==0){
            $product = Product::where('name','like',"%{$search}%")->get();
        }else{
            $product = Product::where('name','like',"%{$search}%")
                ->orwhere('Category_id','like',"%{$category_id->first()}%")->get();
        }

        $cc = 0;
        foreach ($product as $count){
            $category_name = Category::all()->where('id',$count['Category_id'])->pluck('name');
            $product[$cc]['C_name'] = $category_name->first();
            $cc++;
        }

        return view('product.productlist',compact('product'));
    }
}
