<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\StoreComment;
use App\Comment;
use App\Store;
use App\Category;
use App\Product;
use App\User;
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
        $product = Product::all()->where('store_id',$id);
        $comment2 = Comment::all()->where('Store_id', $id);
        $store_name_big = Store::all()->where('id',$id);
        $ww=0;
        $category_name = array();
        $store_name = array();
        foreach ($product as $count){

            $category_name2 = Category::all()->where('id',$count['Category_id'])->pluck('name');

            $category_name[$ww]['C_name']=$category_name2->first();

            $ww++;
        }

        $w2=0;
        foreach ($product as $count){

            $store_name2 = Store::all()->where('id',$count['store_id'])->pluck('name');

            $store_name[$w2]['S_name']=$store_name2->first();

            $w2++;
        }

        $uu=0;
        foreach ($product as $count){
            $product2[$uu]=$count;
            $uu++;
        }
        $abc=0;
        foreach ($category_name as $count){

            $product2[$abc]['C_name'] = $count['C_name'];
            $abc++;
        }
        $ab=0;
        foreach ($store_name as $count){

            $product2[$ab]['S_name'] = $count['S_name'];
            $ab++;
        }

        if ($comment2->count() == 0) {
            $starrate = 0;
        } else {
            $num = 0;
            $starsum = 0;
            foreach ($comment2 as $count) {
                $starsum = $starsum + $count['rate'];
                $num++;
            }
            $starrate = $starsum / $num * 20;
        }

        $comment = array();
        $art = 0;
        foreach ($comment2 as $count){
            $comment[$art] = $count;
            $art++;
        }


        $cc = 0;

        foreach ($comment as $count) {
            $user = User::all()->where('id', $count['Member_id'])->pluck('name');
            $comment[$cc]['user_name'] = $user->first();
            $cc++;
            $count['rate'] = $count['rate'] * 20;
        }

        $aa = 0;
        foreach ($comment as $count) {
            $store_content = StoreComment::all()->where('Member_id', $count['Member_id'])->where('Store_id',$id)->pluck('content');
            $comment[$aa]['Store_comment'] = $store_content->first();
            $aa++;
        }

        if (Auth::user() == null) {
            $user_id['0'] = 0;
        } else {
            $user_id = Comment::all()->where('Member_id', Auth::user()->id)->where('Store_id',$id)->pluck('Member_id');
        }



        if (Auth::user() == null) {
            $user_id['0'] = 0;
        } else {
            $comment_id = Comment::all()->where('Member_id', Auth::user()->id)->where('Store_id',$id)->pluck('id');
        }

        return view('store.storedetail', compact('product', 'comment', 'user_id', 'comment_id', 'starrate','store_name_big'));
    }

    public function search(Request $request)
    {
        $search = $request['name'];

        $store = Store::where('name', 'LIKE', "%$search%")->get();

        return view('store.storelist', compact('store'));
    }
}
