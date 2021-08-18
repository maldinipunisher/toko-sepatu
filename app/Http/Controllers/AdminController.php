<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
      if(Auth::check()){
        if(Auth::user()->role === 'admin'){
            return view('layouts.admin.dashboard');
        }
      }
       return redirect('/admin/login');

    }

    public function login(){
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            }
        }
        return view('layouts.admin.login');
    }

    public function login_action(Request $request) {
        if(Auth::check()){
            Auth::logout();
        }
        $credential = $request->validate(['email' => 'required',
        'password' => 'required|min:6']);
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect('/admin');
        }
        return back()->withErrors(['email'=>'identitas tidak cocok dengan akun manapun']);
    }
}
