<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as input;
use App\User;
use Auth;
use Hash;

class ChangeMemberController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function show()
    {
        return view('post');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function update(Request $request)
    {
        $User=User::find(Auth::user()->id);
        $User->update($request->all());
        return back()->with('success','Password Changed');
    }
}
