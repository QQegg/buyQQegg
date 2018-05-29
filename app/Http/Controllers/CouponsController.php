<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponsController extends Controller
{
        public function index()
    {

        return view('coupon.couponlist', compact('coupon'));
    }

        public function detail($id)
    {

        return view('coupon.coupondetail',compact('coupon'));
    }
    }
