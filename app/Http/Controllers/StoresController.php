<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function index()
    {
        $store = Store::all();
        return view('store.storelist', compact('store'));
    }

    public function detail($id)
    {
        $store = Store::all()->where('id',$id);
        return view('store.storedetail',compact('store'));
    }

    public function search(Request $request)
    {
        $search = $request['name'];

        $store = Store::where('name','LIKE',"%{$search}%")->get();

        return view('store.storelist',compact('store'));
    }
}
