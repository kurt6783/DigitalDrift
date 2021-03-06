<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           // 'email' => 'required|email|max:255',
           'name' => 'required',
           'password' => 'required'
       ]);

       if (Auth::attempt($credentials)) {
           session()->flash('success', '歡迎回來!');
           $user =Auth::user();
           $token = Auth::guard('api')->login($user);
           return response()->json(['AccessToken' => $token]);
       } else {
           session()->flash('danger', 'email或密碼錯誤');
           return redirect()->back()->withInput();
       }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}
