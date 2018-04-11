<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noti;

class NotiController extends Controller
{
    public function index()
    {
        //if兩個BEACON的ID去判斷抓那些NOTI
        $noti=Noti::all()->where('statue',1);
        return view('notificationtest')->with('noti',$noti);//傳入推播內容
    }
}
