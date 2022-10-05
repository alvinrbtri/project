<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\FinanceController;

use App\Http\Controllers\Akun\RoleController;

use App\Http\Controllers\Akun\LoginController;
use App\Http\Controllers\Master\AppController;
use App\Http\Controllers\Layanan\LayananController;

use App\Http\Controllers\Master\KategoriController;
use App\Http\Controllers\Master\ProvinsiController;

use App\Http\Controllers\Layanan\SubLayananController;
use App\Http\Controllers\User\UserPemesananController;
use App\Http\Controllers\User\ProfilCustomerController;


use App\Http\Controllers\User\UserLandingpageController;

use App\Http\Controllers\Layanan\LayananSliderController;
use App\Http\Controllers\Layanan\SliderLayananController;
use App\Http\Controllers\UserKonfirmPembayaranController;
use App\Http\Controllers\Master\TambahAlamatCustomerController;
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

// Tampilan User
    Route::controller(UserLandingpageController::class)->group(function() {
        Route::prefix("user")->group(function() {
            Route::get("/home", "home");
            Route::get("/kontak", "kontak");
            Route::get("/tentang", "tentang");
            Route::prefix("layanan")->group(function() {
                Route::get("/", "layanan");
                Route::get("/barang", "barang");
                Route::get("/bangunan", "bangunan");
                Route::get("/kendaraan", "kendaraan");
                Route::prefix("detail_layanan")->group(function() {
                    Route::get("/kendaraan", "d_kendaraan");
                    Route::get("/bangunan", "d_bangunan");
                    Route::get("/barang", "d_barang");
                });
            });
            Route::prefix("pemesanan")->group(function() {
                Route::resource("pemesanan", UserPemesananController::class);
                Route::get("/info_pembayaran", "i_pembayaran");
                Route::resource("konfirm_pembayaran", UserKonfirmPembayaranController::class);
                Route::get("/struk", "struk");
                Route::prefix("history")->group(function() {
                    Route::get("/on_progress", "o_progress");
                    Route::get("/last_progress", "l_progress");
                });
            });
            Route::prefix("profil")->group(function() {
                Route::resource("profil", ProfilCustomerController::class);
                // Route::get("/profil/edit", ProfilCustomerController::class);
                // Route::get("/profil/simpan", ProfilCustomerController::class);
                Route::get("alamat", [TambahAlamatCustomerController::class, "alamat"]);
                Route::resource("/tambah_alamat", TambahAlamatCustomerController::class);
            });
        });
    });

// Tampilan Vendor
Route::controller(VendorController::class)->group(function(){
    Route::prefix("vendor")->group(function(){
        Route::get("/dashboard_vendor", "dashboard_ven");
    });
});

// Tampilan Finance
Route::controller(FinanceController::class)->group(function(){
    Route::prefix("finance")->group(function(){
        Route::get("/dashboard_finance", "dashboard_fin");
    });
});

// Tampilan Admin
Route::controller(AdminController::class)->group(function(){
    Route::prefix("admin")->group(function(){
        Route::get("/dashboard_admin", "dashboard_ad");
    });
});

Route::group(["middleware" => ["guest"]], function() {
    Route::get("/login", [LoginController::class, "login"]);
    Route::post("/login", [LoginController::class, "post_login"]);
    Route::get("/register", [LoginController::class, "register"]);
    Route::post("/register", [LoginController::class, "post_register"]);
});



Route::group(["middleware" => ["autentikasi"]], function() {
    Route::controller(AppController::class)->group(function() {
        Route::prefix("superadmin")->group(function() {
            Route::get("/dashboard", "dashboard");
            Route::get("/profile", "profile");
            Route::get("/home", "home");
            Route::get("/setting", "setting");
            Route::prefix("vendor")->group(function() {
                Route::get("/", "vendor");
                Route::get("/trans", "trans");
                Route::get("/data_pick_up", "data_pick_up");
            });
            Route::prefix("data")->group(function() {
                Route::get("/order", "order");
                Route::get("/order=bangunan", "bangunan");
                Route::get("/order=barang", "barang");
                Route::get("/order=pickup", "pickup");
                Route::get("/payment", "payment");
                Route::get("/pengaturan-user", "pengaturan_user");
            });

            Route::prefix("akun")->group(function() {
                Route::get("/role/edit", [RoleController::class, "edit"]);
                Route::put("/role/simpan", [RoleController::class, "update"]);
                Route::resource("role", RoleController::class);
            });

            Route::prefix("master")->group(function() {
                Route::get("/kategori/edit", [KategoriController::class, "edit"]);
                Route::put("/kategori/simpan", [KategoriController::class, "update"]);
                Route::resource("kategori", KategoriController::class);
                Route::get("/provinsi/edit", [ProvinsiController::class, "edit"]);
                Route::get("/provinsi/simpan", [ProvinsiController::class, "update"]);
                Route::resource("provinsi", ProvinsiController::class);
            });

            Route::prefix("slider")->group(function() {
                Route::get("/layanan_slider/edit", [LayananSliderController::class, "edit"]);
                Route::put("/layanan_slider/simpan", [LayananSliderController::class, "update"]);
                Route::resource("layanan_slider", LayananSliderController::class);

            });

            Route::prefix("layanan")->group(function() {
                Route::get("/Sub_layanan/edit", [SubLayananController::class, "edit"]);
                Route::get("/Sub_layanan/simpan", [SubLayananController::class, "update"]);
                Route::resource("Sub_layanan", SubLayananController::class);
            });
        });
    });
    Route::get("/logout", [LoginController::class, "logout"]);

});


Route::get("/layout", function() {
    return view("layouts_admin.admin_layout");
});

Route::get("/dashboard", function() {
    return view("admin.dashboard");
});

Route::get("/template_admin", function() {
    return view("admin.layouts.app");
});
