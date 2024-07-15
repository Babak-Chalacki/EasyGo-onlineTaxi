<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\Driver;

class OrderController extends Controller
{
}



// <?php
// // app/Http/Controllers/YourController.php

// namespace App\Http\Controllers;

// use App\Models\Order;

// class OrderController extends Controller
// {
//     public function index()
//     {
//         $orders = Order::with('driver')->get();
//         return view('test', [
//             'orders' => $orders
//         ]);
//     }
// }