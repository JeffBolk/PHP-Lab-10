<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
| Jeffrey Bolk
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home or login route
Route::get('/', function () {
    $user = auth()->user()?->name;
    return view('home', ["user" => $user]);
});

// Register route
Route::get('/register', function () {
    return view('register');
});
Route::post("/registerUser", [UserController::class, "registerUser"]);

// Login and logout routes
Route::post("/login", [UserController::class, "login"]);
Route::post("/logout", [UserController::class, "logout"]);

// Page 1 route
Route::get('/page1', function () {
    $user = auth()->user()?->name;
    return view('page1', ["user" => $user]);
});

