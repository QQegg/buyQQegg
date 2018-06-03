<?php

namespace App\Http\Controllers;

use App\Product;
use App\User_push;
use Illuminate\Http\Request;
use App\Push;
use App\Store;
use Illuminate\Support\Facades\Auth;

class PushsController extends Controller
{
    public function index()
    {
        $push2=User_push::all()->where('User_id',Auth::guard()->user()->id);
        $push = array();
        $aa = 0;
            foreach ($push2 as $count) {
                $push[$aa] = $count;
                $aa++;
            }

        $zz = 0;
        foreach ($push as $count){
            $push_data = Push::all()->where('id',$count['Push_id']);
            $push[$zz]['Commodity_id'] = $push_data->first()['Commodity_id'];
            $push[$zz]['title'] = $push_data->first()['title'];
            $push[$zz]['discount'] = $push_data->first()['discount'];
            $push[$zz]['date_start'] = $push_data->first()['date_start'];
            $push[$zz]['date_end'] = $push_data->first()['date_end'];
            $push[$zz]['time_start'] = $push_data->first()['time_start'];
            $push[$zz]['time_end'] = $push_data->first()['time_end'];
            $zz++;
        }

        $yy = 0;
        foreach ($push as $count){
            $Commodity_data = Product::all()->where('id',$count['Commodity_id']);
            $push[$yy]['Product_name'] = $Commodity_data->first()['name'];
            $push[$yy]['Product_price'] = $Commodity_data->first()['price'];
            $push[$yy]['Product_picture'] = $Commodity_data->first()['picture'];
            $yy++;
        }

        $cc = 0;
        foreach ($push as $count){
            $store_name = Store::all()->where('id',$count['Store_id'])->pluck('name');
            $push[$cc]['Store_name'] = $store_name->first();
            $cc++;
        }

        return view('push.pushlist', compact('push'));
    }

    public function detail($id)
    {

        return view('push.pushdetail',compact('push'));
    }
}
