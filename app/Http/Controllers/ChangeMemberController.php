<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as input;
use App\User;
use Auth;
use Hash;

class ChangeMemberController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function photo()
    {
        return view('gallery');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        $user_picture = User::all()->where('name',Auth::guard()->user()->name);
        return view('contact',compact('user_picture'));
    }
    public function codes()
    {
        return view('codes');
    }
    public function services()
    {
        return view('services');
    }
    public function password()
    {
        return view('change_password');
    }
    public function update(Request $request)
    {
        $User=User::find(Auth::user()->id);
        if ($request->hasFile('picture')) {
            $file_name = $request->file('picture')->getClientOriginalName();
            $destinationPath = '/public/user';
            $request->file('picture')->storeAs($destinationPath, $file_name);
        }
        $User->update($request->all());
        $User->update([
            'picture' => $file_name,
        ]);
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
