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
    public function password()
    {
        return view('change_password');
    }
    public function update(Request $request)
    {
        $User=User::find(Auth::user()->id);
        $User->update($request->all());
        return back()->with('success','修改成功');
    }
    public function change_password()
    {
        $User=User::find(Auth::user()->id);
        if(Hash::check(Input::get('passwordold'),$User['password']) && Input::get('password') ==Input::get('password_confirmation')){
            $User->password =bcrypt(Input::get('password'));
            $User->save();
            return back()->with('success','修改成功');
        }
        else
            return back()->with('error','修改失敗');
    }
}
