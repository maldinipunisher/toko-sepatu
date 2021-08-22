<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register()
    {
        return view('layouts.register');
    }

    public function register_action(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6',
            'alamat' => 'required'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        $user = new User($validateData);
        $user->save();
        $request->session()->flash('success','Registrasi berhasil silahkan login');
        return redirect('/login');
    }

    public function login(){
        return view('layouts.login');
    }

    public function login_action(Request $request){
        $credential = $request->validate(['email' => 'required',
        'password' => 'required|min:6']);
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors(['email'=>'identitas tidak cocok dengan akun manapun']);
}

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
