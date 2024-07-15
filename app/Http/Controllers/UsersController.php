<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //    get
    function user_register_form()
    {
        return view("user.register");
    }
    function user_login_form()
    {
        return view('user.login');
    }
    function profile()
    {
        return view("user.profile");
    }
    //    get
    //    post
    function post_register(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'repass' => 'required|same:password',
            'number' => 'required|numeric|digits:11'
        ]);

        if ($request->password == $request->repass) {
            $user = new User();
            $user->fullname = $request->fullname;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->phone_number = $request->number;
            $user->save();
            Auth::login($user);
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Passwords do not match');
        }
    }

    function user_login(Request $request)
    {
        $request->validate([
            'email' => 'required|',
            'password' => 'required'
        ]);
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect('/user-profile');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    function edit_user_profile(Request $request)
    {
        $user = Auth::user(); // retrieve the current user
        $user->fullname = $request->fullname;
        $user->phone_number = $request->number;
        $user->email = $request->email;
        $user->username = $request->username;



        $user->save();
        return redirect()->back();
    }
}
    //    post