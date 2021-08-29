<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('layouts.admin.dashboard');
    }

    public function login()
    {
        return view('layouts.admin.login');
    }

    public function login_action(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect('/admin');
        }
        return back()->withErrors(['email' => 'identitas tidak cocok dengan akun manapun']);
    }

    public function users(){
        $users = User::all();
        // dd($users);
        return view('layouts.admin.users')->with('users',$users);
    }

    // public function users_action(Request $request){
    //     $users = User::all();
    //     dd($users);
    // }

    public function orders(){
        return view('layouts.admin.orders');
    }

    public function profile(){
        return view('layouts.admin.profile');
    }

}
