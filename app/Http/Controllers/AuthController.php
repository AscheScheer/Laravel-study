<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class AuthController extends Controller
{
    function showregister()
    {
        return view('register', ['title' => 'Register']);
    }

    function submitregister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('admin.dashboard');
    }

    function showlogin()
    {
        return view('login', ['title' => 'login']);
    }

    function submitlogin(Request $request){
        $data = $request->only('username', 'password');

        if (Auth::attempt($data)) {
            request()->session()->regenerate();
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('failed', 'Wrong Username or Password!');
        }
        
    }

    function logout(){
        Auth::logout();
        return redirect()->route('show.login');
    }
}
