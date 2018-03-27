<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotiController extends Controller
{
    public function index()
    {
        return view('notificationtest');//傳入推播內容
    }
}
