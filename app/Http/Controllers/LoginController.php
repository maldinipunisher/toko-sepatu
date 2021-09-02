<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function register()
    {
        return view('layouts.register');
    }

    public function register_action(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6',
            'address' => 'required|max:120',
            'phone' =>'min:11|max:13|required',
            'profilepic' =>'',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        $user = new User($validateData);
        $user_id = rand(1,9999999999);
        while(User::where('user_id', $user_id)->exists()){
            $user_id = rand(1,9999999999);
        }
        $user->role = 2 ;
        $user->user_id = $user_id;
        // Storage::putFile($user->user_id ,new File("app/public/".$user->user_id), 'public' );
        $path = $request->file('profilepic')->storeAs('public/profiles', $user->user_id);
        $user->profilepic = Storage::url($path);
        // dd(url($user->profilepic));

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
            // $role = Roles::find(2);
            // dd(Auth::user()->roles);
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
