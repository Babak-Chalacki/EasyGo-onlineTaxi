<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    function driver_register_form()
    {
        return view('driver.register');
    }
    function driver_login_form()
    {
        return view('driver.login');
    }
    function driver_register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|unique:drivers',
            'email' => 'required|email|unique:drivers',
            'password' => 'required|min:8',
            'car_name' => 'required|string',
            'car_model' => 'required|string',
            'car_color' => 'required|string',
            'number' => 'required|numeric',
        ]);
        if ($request->password == $request->repass) {
            $new_driver = new Driver();
            $new_driver->fullname = $request->fullname;
            $new_driver->username = $request->username;
            $new_driver->email = $request->email;
            $new_driver->password = bcrypt($request->password);
            $new_driver->car_name = $request->car_name;
            $new_driver->car_model = $request->car_model;
            $new_driver->car_color = $request->car_color;
            $new_driver->phone_nomber = $request->number;

            $new_driver->save();
            Auth::guard('drivers')->login($new_driver);
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Password and Re-password not match');
        }
    }

    function login_driver(Request $request)
    {
        // $request->validate([
        //     'email' => 'equired|',
        //     'password' => 'equired'
        // ]);

        if (Auth::guard('drivers')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}