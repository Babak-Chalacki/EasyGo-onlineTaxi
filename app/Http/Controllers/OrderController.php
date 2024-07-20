<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\Driver;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('driver')->get();
        return view('user.order', [
            'orders' => $orders
        ]);
    }
    function save_order(Request $request)
    {
        $order = new order();
        $order->user_id = Auth::user()->id;
        $order->pickup_lat = $request->origin_lat;
        $order->pickup_lng = $request->origin_lng;
        $order->dropoff_lat = $request->dest_lat;
        $order->dropoff_lng = $request->dest_lng;
        $order->fare = $request->price;
        $order->save();
        return redirect('/user-profile');
    }
    function delete_trip()
    {
        $order = Order::where('user_id', Auth::user()->id)->latest()->first();
        if ($order) {
            $order->delete();
        }
        return redirect('/user-profile');
    }
}