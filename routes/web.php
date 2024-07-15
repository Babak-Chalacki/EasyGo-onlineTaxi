<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, "index"]);

// normal route
Route::get("/login-page", [HomeController::class, "login_page"]);
Route::get("/register-page", [HomeController::class, "register_page"]);
// normal route
// driver
Route::get('/driver-register', [DriversController::class, "driver_register_form"]);
Route::get('/driver-login', [DriversController::class, "driver_login_form"]);
Route::post('/driver-register', [DriversController::class, "driver_register"]);
Route::post('/login-driver', [DriversController::class, "login_driver"]);
// driver
// user
Route::get('/user-register', [UsersController::class, "user_register_form"]);
Route::get('/user-login', [UsersController::class, "user_login_form"]);
Route::get('/user-profile', [UsersController::class, "profile"])->middleware("auth");
Route::post('/user-login', [UsersController::class, "user_login"]);
Route::post('/user-login', [UsersController::class, "user_login"]);
Route::post('/edit-user-profile', [UsersController::class, "edit_user_profile"]);
// user
// logout
Route::get('/logout', [HomeController::class, "logout"]);
// logout
// Registeration
Route::post("/user_register", [UsersController::class, "post_register"]);
// Registeration