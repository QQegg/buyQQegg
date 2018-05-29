<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Push;
use App\Store;
class PushsController extends Controller
{
    public function index()
    {
        $push=Push::all()->where('statue',1);
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
