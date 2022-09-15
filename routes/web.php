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
    return view('app');
});

Route::group(["middleware" => ["guest"]], function() {
    Route::get("/login", [LoginController::class, "login"]);
    Route::post("/login", [LoginController::class, "post_login"]);
});

Route::group(["middleware" => ["autentikasi"]], function() {
    Route::controller(AppController::class)->group(function() {
        Route::prefix("admin")->group(function() {
            Route::get("/dashboard", "dashboard");
            Route::get("/profile", "profile");
            Route::get("/home", "home");
            Route::get("/setting", "setting");
            Route::prefix("vendor")->group(function() {
                Route::get("/", "vendor");
                Route::get("/trans", "trans");
                Route::get("/data_pick_up", "data_pick_up");
            });
        });
    });
    Route::get("logout", [LoginController::class, "logout"]);
});


Route::get("/layout", function() {
    return view("layouts_admin.admin_layout");
});

Route::get("/dashboard", function() {
    return view("admin.dashboard");
});
