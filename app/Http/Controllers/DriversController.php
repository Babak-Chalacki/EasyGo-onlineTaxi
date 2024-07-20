<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    function driver_profile()
    {
        $orders = Order::whereNull('driver_id')->get();
        return view("driver.profile", [
            'orders' => $orders
        ]);
    }
    public function driver_register_form()
    {
        return view('driver.register');
    }

    public function driver_login_form()
    {
        return view('driver.login');
    }

    public function driver_register(Request $request)
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

        $driver = Driver::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'car_name' => $request->car_name,
            'car_model' => $request->car_model,
            'car_color' => $request->car_color,
            'phone_number' => $request->number,
        ]);

        Auth::guard('drivers')->login($driver);
        return redirect('/');
    }

    public function login_driver(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('drivers')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/driver-profile');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
            // return redirect('/driver-profile');
        }
    }
    function edit_driver_profile(Request $request)
    {
        $user = Auth::guard('drivers')->user(); // retrieve the current user
        $user->fullname = $request->fullname;
        $user->phone_number = $request->number;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->car_name = $request->car_name;
        $user->car_model = $request->car_model;
        $user->car_color = $request->car_color;



        $user->save();
        return redirect()->back();
    }
    function driver_accept($id)
    {
        $orders = Order::find($id);
        $orders->driver_id =  Auth::guard('drivers')->id();
        $orders->save();
        return redirect()->back();
    }
}
