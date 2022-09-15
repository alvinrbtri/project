<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [LoginController::class, "login"]);
Route::post("/login", [LoginController::class, "post_login"]);
Route::get("logout", [LoginController::class, "logout"]);
Route::get("/dashboard", [AppController::class, "dashboard"]);

Route::get("/layout", function() {
    return view("layouts_admin.admin_layout");
});

Route::get("/dashboard", function() {
    return view("admin.dashboard");
});
