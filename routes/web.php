<?php

use App\Models\Driver;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\UsersController;
use App\Models\Order;
use App\Http\Controllers\AdminController;

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
// Route::get('/driver-profile', [DriversController::class, "driver_profile"])->middleware("auth.driver");
Route::get('/driver-profile', [DriversController::class, "driver_profile"]);
Route::post('/driver-register', [DriversController::class, "driver_register"]);
Route::post('/login-driver', [DriversController::class, "login_driver"]);
Route::post('/edit-driver-profile', [DriversController::class, "edit_driver_profile"]);
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
Route::get('/logout', [HomeController::class, "logout"]); ////////////////
// logout
// Registeration
Route::post("/user_register", [UsersController::class, "post_register"]);
// Registeration
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

// order
Route::get('/user-order', [OrderController::class, "index"]);
Route::post('/save-order', [OrderController::class, "save_order"]);
Route::get('/delete-trip', [OrderController::class, "delete_trip"]);
Route::post("/driver-accept/{id}", [DriversController::class, "driver_accept"]);
// order

// admin
// routes/web.php
Route::get("/Password-recovery", [AdminController::class, "Password_recovery"]);
Route::get("/admin-login", [AdminController::class, "index"]);
Route::post("/admin-login-post", [AdminController::class, "admin_login"]);
Route::post("/password-recovery-post", [AdminController::class, "password_recovery_post"]);
Route::get("/admin-dashboard", [AdminController::class, "admin_dashboard"]);
// driver
Route::get("/admin-diver", [AdminController::class, "admin_drivfer"]);
Route::get("/admin/driver/delete/{id}", [AdminController::class, "driver_remove"]);
// driver
// passenger
Route::get("/admin/passengers", [AdminController::class, "admin_passenger"]);
Route::get("/admin/user/delete/{id}", [AdminController::class, "user_remove"]);
// passenger
//order
Route::get("/admin/order", [AdminController::class, "admin_order"]);
//order
// admin