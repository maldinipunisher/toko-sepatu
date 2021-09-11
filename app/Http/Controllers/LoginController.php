<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Registered;

class LoginController extends Controller
{
    public function register()
    {
        return view('layouts.register');
    }

    public function verification()
    {
        return view('layouts.verification');
    }

    public function register_action(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6',
            'address' => 'required|max:120',
            'phone' => 'min:11|max:16|required',
            'profilepic' => '',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        $user = new User($validateData);
        $user_id = mt_rand(1, 99999);
        while (User::where('user_id', $user_id)->exists()) {
            $user_id = mt_rand(1, 99999);
        }
        $user->role = 2;
        $user->user_id = $user_id;
        // Storage::putFile($user->user_id ,new File("app/public/".$user->user_id), 'public' );
        if ($request->profilepic != null) {
            $path = $request->file('profilepic')->storeAs('public/profiles', $user->user_id . '.jpg');
            $user->profilepic = Storage::url($path);
        }
        // dd(url($user->profilepic));
        event(new Registered($user));

        $user->save();

        $request->session()->flash('success', 'Registrasi berhasil cek email untuk konfirmasi.');
        return redirect('/login');
    }

    public function login()
    {
        return view('layouts.login');
    }

    public function login_action(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            // dd(Auth::user()->getKey());
            // dd(hash_equals((string) 6239679278,(string) Auth::user()->getKey()));
            // $role = Roles::find(2);
            // dd(Auth::user()->roles);
            return redirect('/');
        }
        return back()->withErrors(['email' => 'identitas tidak cocok dengan akun manapun']);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
