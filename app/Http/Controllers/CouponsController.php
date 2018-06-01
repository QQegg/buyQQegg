<?php

namespace App\Http\Controllers;

use App\User_Coupon;
use App\Coupon;
use Illuminate\Http\Request;
use Auth;
class CouponsController extends Controller
{
        public function index()
    {

        $xd=User_Coupon::all()->where('User_id',Auth::user()->id)
                                 ->where('use_status',0);
        $ff=0;
     $coupon=array();
        foreach ($xd as $gg){
            $coupon[$ff]=$gg;
            $ff++;
        }


        $cc = 0;
        foreach ($coupon as $count){
            $coupon_title = Coupon::all()->where('id',$count['Coupon_id']);
            $coupon[$cc] = $coupon_title->first();
            $cc++;

        }


        return view('coupon.couponlist', compact('coupon'));
    }

        public function detail($id)
    {

        return view('coupon.coupondetail',compact('coupon'));
    }
    }
