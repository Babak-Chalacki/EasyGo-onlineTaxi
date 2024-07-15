<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index()
    {
        return view('index');
    }
    function login_page()
    {
        return view('login');
    }
    function register_page()
    {
        return view("register");
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}