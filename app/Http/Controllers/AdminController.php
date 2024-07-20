<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Driver;
use App\Models\User;
use App\Models\Order;

class AdminController extends Controller
{
    function index()
    {
        return view('admin.login');
    }
    function password_recovery()
    {
        return view('admin.password_recovery');
    }
    function admin_dashboard()
    {
        return view('admin.dashbord');
    }
    function password_recovery_post(Request $request)
    {
        // $admin = Admin::find(1); // Find an admin with ID 1
        // or
        $admin = Admin::where('email', "admin@gmail.com")->first(); // Find an admin with a specific email
        if ($request->password1 == $request->password2) {
            $admin->password = bcrypt($request->password1);
            $admin->save();
            return redirect('/admin-login');
        } else {
            return redirect('/Password-recovery');
        }
    }
    function admin_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/admin-dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
            // return redirect('/driver-profile');
        }
    }

    function dashboard()
    {
        // Admin dashboard view
        return view('admin.dashboard');
    }


    function admin_drivfer()
    {
        $drivers = Driver::all();
        return view('admin.drivers', [
            "drivers" => $drivers
        ]);
    }
    function driver_remove($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect()->back();
    }
    function admin_passenger()
    {
        $users = User::all();
        return view('admin.passenger', [
            "users" => $users
        ]);
    }
    function user_remove($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
    }
    function admin_order()
    {
        $orders = Order::all();
        return view('admin.orders', [
            "orders" => $orders
        ]);
    }
}