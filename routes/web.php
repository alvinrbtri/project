<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\SubDetailController;
use App\Http\Controllers\SubSliderController;
use App\Http\Controllers\SliderhomeController;
use App\Http\Controllers\SubLayananController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\GambarkecilController;
use App\Http\Controllers\UserLayananController;
use App\Http\Controllers\DataPenggunaController;
use App\Http\Controllers\SliderkontakController;
use App\Http\Controllers\SlidertentangController;
use App\Http\Controllers\KebijakanPrivasiController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Maps
Route::get('/map', [MapsController::class, 'maps'])->name('map');

// admin-layanan
route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
// admin-sublayanan
// route::get('/sublayanan', [SubLayananController::class, 'index'])->name('sublayanan');

Route::group(["middleware" => ["auth"]], function() {
    ////////////-----------ADMIN------------/////////////
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/index', 'index')->middleware('role:admin')->name('admin.index');
        Route::get('/admin/dashboard', 'index');
        Route::get('/admin/profile/profil', 'profile');
        Route::get('/admin/data/order', 'order');
        Route::get('/admin/data/order=barang', 'barang');
        Route::get('/admin/home/home', 'home');
        Route::get('/admin/data/order=bangunan', 'bangunan');
        Route::get('/admin/data/order=pickup', 'pickup');
        Route::get('/admin/data/payment', 'payment');
        Route::get('/admin/vendor', 'vendor');
        Route::get('/admin/vendor/trans', 'trans');
        Route::get('/admin/vendor/data-pick-up', 'data_pickup');
        Route::get('/admin/vendor/data_trans=selesai', 'trans_selesai');
        Route::get('/admin/vendor/data_trans=berlangsung', 'trans_berlangsung');
        Route::get('/admin/setting', 'setting');
        Route::get('/admin/data/pengaturan-user','pengaturanuser');
    });
Route::get('/admin/customer/data', [DataPenggunaController::class, 'index']);

    //admin-subslider
    Route::get('/subslider/edit', [SubSliderController::class, 'edit']);
    route::get('/subslider/simpan', [SubSliderController::class, 'update']);
    Route::get("/subslider/detail", [SubSliderController::class, "show"]);
    Route::resource('subslider', SubSliderController::class);

    //admin-sublayanan
    route::get('/sublayanan/edit', [SubLayananController::class, 'edit']);
    route::get('/sublayanan/simpan', [SubLayananController::class, 'update']);
    route::get("/sublayanan/detail", [SubLayananController::class, "show"]);
    Route::resource('sublayanan', SubLayananController::class);

    //admin-layanan
    route::get('/layanan/edit', [LayananController::class, 'edit']);
    route::get('/layanan/simpan', [LayananController::class, 'update']);
    route::get("/layanan/detail", [LayananController::class, "show"]);
    Route::resource('layanan', LayananController::class);

    // //admin-tambah layanan
    // route::get('/admin/layanan/layanan', [LayananController::class, 'index'])->name('/layanan');
    // route::post('/create', [LayananController::class, 'post'])->name('/post');
});

//UBAH PASSWORD ADMIN
Route::controller(ProfileController::class)->group(function(){
    Route::get('/admin/profile', 'index')->name('profile.index');
    Route::patch('/profile/{id}', 'update')->name('profile.update');
});



//CRUD HOME
Route::controller(UserController::class)->group(function(){
    Route::get('/admin/home/home','home')->middleware('auth')->name('admin.home.home');
    Route::get('/admin/home/tambahhome','tambahhome')->name('admin.home.tambahhome');
    Route::post('/admin/home/inserthome','inserthome')->name('admin.home.inserthome');
    //Menampilkan Data berdasarkan ID
    Route::get('/admin/home/tampilhome/{id}','tampilhome')->name('admin.home.tampilhome');
    //Mengedit data berdasarkan id
    Route::post('/admin/home/updatehome/{id}','updatehome')->name('admin.home.updatehome');
    //delete data berdasarkan id
    Route::get('/admin/home/deletehome/{id}','deletehome')->name('admin.home.deletehome');
});

/////-------USER-------/////
Route::get('/user/index', [UserController::class, 'index'])->middleware('role:user')->name('user.index');
Route::get('/user/layanan', [UserLayananController::class, 'index'])->middleware('auth');
Route::get('/user/tentang', [TentangController::class, 'index'])->middleware('auth');
Route::get('/user/kontak', [KontakController::class, 'index'])->middleware('auth');

//admin kategori layanan
Route::get('/admin/layanan-kategori/showsubkategori', [AdminController::class, 'kategorilayanan'])->middleware('auth');

Route::controller(UserController::class)->group(function(){
    Route::get('/user/pemesanan/info_pembayaran', 'InfoPembayaran')->middleware('auth');
    Route::get('/user/pemesanan/History/Last_Progress', 'LasProgress')->middleware('auth');
    Route::get('/user/pemesanan/History/On_Progress', 'OnProgress')->middleware('auth');
    Route::get('/user/pemesanan/History/Pembatalan', 'Pembatalan')->middleware('auth'); 
    Route::get('/user/pemesanan/struk', 'struk')->middleware('auth');
    Route::get('/user/pemesanan/konfirm_pembayaran', 'KonfirmPembayaran')->middleware('auth');
    Route::get('/user/pemesanan/pemesanan', 'pemesanan')->middleware('auth');
    //PROFILE USER
    Route::get('/user/profile/profileuser', 'profileuser')->middleware('auth');
    Route::get('/user/profile/edit_profile', 'editprofile')->middleware('auth');
    Route::get('/user/profile/Alamat', 'alamat')->middleware('auth');
    Route::get('/user/profile/edit_alamat', 'EditAlamat')->middleware('auth');
    Route::get('/user/profile/Tambah_alamat', 'TambahAlamat')->middleware('auth');
    Route::get('/user/Notifikasi', 'Notifikasi')->middleware('auth');
    Route::get('/user/profile/kebijakanprivasi', 'KebijakanPrivasi')->middleware('auth');

    Route::get('/user/profile/bantuan', 'Bantuan')->middleware('auth');
});

//KEBIJAKAN PRIVASI///
route::controller(KebijakanPrivasiController::class)->group(function(){
    Route::get('/user/profile/kebijakanprivasi/index', 'index')->name('index');
    Route::get('/user/profile/kebijakanprivasi/detail', 'show');
    Route::put('/user/profile/kebijakanprivasi/simpan', 'update');
    Route::get('/user/profile/kebijakanprivasi/edit', 'edit');
}); 

Route::resource('/keb', KebijakanPrivasiController::class);


//admn-subslider

// route::post('/create', [SubSliderController::class, 'post'])->name('/post');
// route::match(['get', 'post'], '/edit{id}', [SubSliderController::class, 'edit']);

// //admin-subdetail
// route::get('/subdetail', [SubDetailController::class, 'index'])->name('subdetail');
// route::post('/create', [SubDetailController::class, 'post'])->name('/post');
// route::match(['get','post'], '/edit{id}', [SubDetailController::class, 'edit']);


//user-pemesanan
Route::get('/user/pemesanan/info_pembayaran', function () {
    return view('/user/pemesanan/info_pembayaran',[
        "title" => "pembayaran"
    ]);
});

//user-pemesanan-history
Route::get('/user/pemesanan/History/Last_Progress', function () {
    return view('/user/pemesanan/History/Last_Progress',[
        "title" => "history"
    ]);
});

//user-pemesanan-pemesanan
Route::get('/user/pemesanan/History/On_Progress', function () {
    return view('/user/pemesanan/History/On_Progress',[
        "title" => "pesanan"
    ]);
});

Route::get('/user/pemesanan/History/On_Progress', function () {
    return view('/user/pemesanan/History/On_Progress',[
        "title" => "history"
    ]);
});

Route::get('/user/pemesanan/struk', function () {
    return view('/user/pemesanan/struk',[
        "title" => "Struk"
    ]);
});

Route::get('/user/pemesanan/konfirm_pembayaran', function () {
    return view('/user/pemesanan/konfirm_pembayaran',[
        "title" => "Konfirmasi Pembayaran"
    ]);
});

Route::get('/user/pemesanan/pemesanan', function () {
    return view('/user/pemesanan/pemesanan',[
        "title" => "Pemesanan"
    ]);
});

//profile user
Route::get('/user/profile/profileuser', function () {
    return view('/user/profile/profileuser',[
        "title" => "Profile User"
    ]);
});

Route::get('/user/profile/edit_profile', function () {
    return view('/user/profile/edit_profile',[
        "title" => "Edit Profile"
    ]);
});


Route::get('/user/profile/Alamat', function () {
    return view('/user/profile/Alamat',[
        "title" => "Alamat"
    ]);
});

Route::get('/user/profile/edit_alamat', function () {
    return view('/user/profile/edit_alamat',[
        "title" => "Edit alamat"
    ]);
});

Route::get('/user/profile/Tambah_alamat', function () {
    return view('/user/profile/Tambah_alamat',[
        "title" => "Tambah Alamat"
    ]);
});

Route::get('/user/Notifikasi', function () {
    return view('/user/Notifikasi',[
        "title" => "Notifikasi"
    ]);
});

Route::get('/user/profile/kebijakanprivasi', function () {
    return view('/user/profile/kebijakanprivasi',[
        "title" => "Kebijakan Privasi"
    ]);
});

Route::get('/user/profile/bantuan', function () {
    return view('/user/profile/bantuan',[
        "title" => "Bantuan"
    ]);
});

Route::get('/user/bantuan/Jawaban1', function () {
    return view('/user/bantuan/Jawaban1',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/bantuan/Jawaban2', function () {
    return view('/user/bantuan/Jawaban2',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/bantuan/Jawaban3', function () {
    return view('/user/bantuan/Jawaban3',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/bantuan/Jawaban4', function () {
    return view('/user/bantuan/Jawaban4',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/bantuan/Jawaban5', function () {
    return view('/user/bantuan/Jawaban5',[
        "title" => "Pusat Bantuan"
    ]);
});

Route::get('/user/profile/Tentang', function () {
    return view('/user/profile/Tentang',[
        "title" => "Tentang Titipsini"
    ]);
});


//Route subkategori layanan

Route::get('user/subkategori/subbaru', function () {
    return view('user/subkategori/subbaru', [
        "title" =>" Golongan 1"
    ]);
});

//detail kendaraan

Route::get('user/subkategori/detailbaru', function () {
    return view('user/subkategori/detailbaru', [
        "title" =>" Detail kendaraan"
    ]);
});

//wishlist
Route::get('user/pemesanan/wishlist', function () {
    return view('user/pemesanan/wishlist', [
        "title" =>"Wishtlist"
    ]);
});
Route::get('user/pemesanan/qrish', function () {
    return view('user/pemesanan/qrish', [
        "title" =>"Wishtlist"
    ]);
});

//profile vendor di user
Route::get('user/profiilevendor/profilevendor', function () {
    return view('user/profiilevendor/profilevendor', [
        "title" =>"Wishtlist"
    ]);
});


//Superadmin
// Route::get('/superadmin/index', [SuperadminController::class, 'index'])->middleware('role:superadmin')->name('superadmin.index');

Route::get('/superadmin/dashboard', function () {
    return view('superadmin/index');
});
// Route::get('/superadmin/profile', [SuperadminController::class, 'index'])->middleware('role:superadmin')->name('superadmin.profile.ubah');

// //ubah password
Route::controller(SuperadminController::class)->group(function(){
    Route::get('/superadmin/index', 'index')->middleware('role:superadmin')->name('superadmin.index');
    Route::get('/superadmin/profile','profile')->middleware('auth')->name('profile.profile');
    Route::get('/superadmin/profile','indexp')->name('profile.indexp');
    Route::patch('/profile/{id}','update')->name('profile.update');
    Route::get('/superadmin/transaksi/transaksi','transaksiuser');
    Route::get('/superadmin/penarikan/penarikan','penarikan');
    Route::get('/superadmin/penarikan/history','history');


});
// Route::get('/admin/profile', [AdminController::class, 'profile'])->middleware('auth');
// Route::get('/admin/profile', [ProfileController::class, 'index'])->name('profile.index');
// Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/superadmin/data/alamat', function () {
    return view('superadmin/data/alamat');
});

Route::get('/superadmin/data/order', function () {
    return view('superadmin/data/order');
});

Route::get('/superadmin/data/payment', function () {
    return view('superadmin/data/payment');
});

Route::get('/superadmin/data/pengaturan-user', function () {
    return view('superadmin/data/pengaturan-user');
});

Route::get('/superadmin/vendor/laporan', function () {
    return view('superadmin/vendor/laporan');
});

Route::get('/superadmin/vendor/pickup', function () {
    return view('superadmin/vendor/pickup');
});

Route::get('/superadmin/vendor/transaksi', function () {
    return view('superadmin/vendor/transaksi');
});

Route::get('/superadmin/vendor/vendor', function () {
    return view('superadmin/vendor/vendor');
});

Route::get('/superadmin/setting/hapus', function () {
    return view('superadmin/setting/hapus');
});

Route::get('/superadmin/setting/tambah', function () {
    return view('superadmin/setting/tambah');
});

//Vendor
Route::controller(VendorController::class)->group(function(){
    Route::get('/vendor/homelagi', 'index')->middleware('role:vendor')->name('vendor.index');
    Route::get('/Vendor/order/kendaraan/orderan_baru', 'OrderanBaru')->middleware('auth');
    Route::get('/Vendor/order/kendaraan/rincian_baru', 'RincianBaru')->middleware('auth');
    Route::get('/Vendor/Profile/profile_vendor', 'ProfileVendor')->middleware('auth');
    Route::get('/Vendor/Profile/edit_profilevendor', 'EditProfile')->middleware('auth');
    Route::get('/Vendor/Profile/profile_vendor', 'EditAlamat')->middleware('auth');
    Route::get('/Vendor/Profile/Notifikasi', 'Notifikasi')->middleware('auth');
    Route::get('/Vendor/Profile/Kebijakan_privasi', 'KebijakanPrivasi')->middleware('auth');
    Route::get('Vendor/Profile/Ketentuan_layanan', 'KetentuanLayanan')->middleware('auth');
    Route::get('/Vendor/Profile/Pusat_bantuan', 'PusatBantuan')->middleware('auth');
});

Route::get('Vendor/Profile/Jawaban1', function () {
    return view('Vendor/Profile/Jawaban1', [
        "title" =>"Jawaban1"
    ]);
});

Route::get('Vendor/Profile/Jawaban2', function () {
    return view('Vendor/Profile/Jawaban2', [
        "title" =>"Jawaban2"
    ]);
});

Route::get('Vendor/Profile/Jawaban3', function () {
    return view('Vendor/Profile/Jawaban3', [
        "title" =>"Jawaban3"
    ]);
});

Route::get('Vendor/Profile/Jawaban4', function () {
    return view('Vendor/Profile/Jawaban4', [
        "title" =>"Jawaban4"
    ]);
});

Route::get('Vendor/Profile/Jawaban5', function () {
    return view('Vendor/Profile/Jawaban5', [
        "title" =>"Jawaban5"
    ]);
});

Route::get('Vendor/Profile/Jawaban6', function () {
    return view('Vendor/Profile/Jawaban6', [
        "title" =>"Jawaban6"
    ]);
});

//notifikasi vendor
Route::get('/notifikasi', static fn () => view('Vendor/notifikasi'));

//earning
Route::get('/earning', static fn () => view('Vendor/earnings/earning'));
Route::get('/penarikan_baru', static fn () => view('Vendor/earnings/penarikan_baru'));
Route::get('/info_penarikan', static fn () => view('Vendor/earnings/info_penarikan'));
Route::get('/riwayat_penarikan', static fn () => view('Vendor/earnings/riwayat_penarikan'));

//orderan bangunan
Route::get('/rincian_bangunan', static fn () => view('Vendor/order/bangunan/rincian_bangunan'));
Route::get('/orderan_bangunan', static fn () => view('Vendor/order/bangunan/orderan_bangunan'));

//orderan barang
Route::get('/rincian_barang', static fn () => view('Vendor/order/barang/rincian_barang'));
Route::get('/rincian_tanpapick', static fn () => view('Vendor/order/barang/rincian_tanpapick'));
Route::get('/orderan_barang', static fn () => view('Vendor/order/barang/orderan_barang'));

//orderan pickup
Route::get('/orderan_pickup', static fn () => view('Vendor/order/pickup/orderan_pickup'));
Route::get('/rincian_pickup', static fn () => view('Vendor/order/pickup/rincian_pickup'));

//history vendor
Route::get('/rincian_bangunan', static fn () => view('Vendor/history/bangunan/rincian_bangunan'));
Route::get('/rincian_barang', static fn () => view('Vendor/history/barang/rincian_barang'));
Route::get('/historybaru', static fn () => view('Vendor/history/kendaraan/historybaru'));
Route::get('/rincian_kendaraan', static fn () => view('Vendor/history/kendaraan/rincian_kendaraan'));
Route::get('/history_pickup', static fn () => view('Vendor/history/pickup/history_pickup'));

//<--Vendor Kelola Kendaraan-->
Route::get('Vendor/Kelola-Kendaraan/kelola_kendaraan', function () {
    return view('Vendor/Kelola-Kendaraan/kelola_kendaraan', [
        "title" =>"Kelola_kendaraan"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/layanan_step1', function () {
    return view('Vendor/Kelola-Kendaraan//layanan_step1', [
        "title" =>"laynan_step1"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/layanan_step2', function () {
    return view('Vendor/Kelola-Kendaraan/layanan_step2', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/layanan_step3', function () {
    return view('Vendor/Kelola-Kendaraan/layanan_step3', [
        "title" =>"layanan_step3"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/layanan_step4', function () {
    return view('Vendor/Kelola-Kendaraan/layanan_step4', [
        "title" =>"layanan_step4"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/Rincian_lahan', function () {
    return view('Vendor/Kelola-Kendaraan/Rincian_lahan', [
        "title" =>"Rincian_kendaraan"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/atur_alamat', function () {
    return view('Vendor/Kelola-Kendaraan/atur_alamat', [
        "title" =>"atur_alamat"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/Rincian_kendaraan', function () {
    return view('Vendor/Kelola-Kendaraan/Rincian_kendaraan', [
        "title" =>"Rincian_kendaraan"
    ]);
});

Route::get('Vendor/Kelola-Kendaraan/Rincian_kendaraan', function () {
    return view('Vendor/Kelola-Kendaraan/Rincian_kendaraan', [
        "title" =>"Rincian_kendaraan"
    ]);
});


Route::get('Vendor/Kelola-Kendaraan/setelah_input', function () {
    return view('Vendor/Kelola-Kendaraan/setelah_input', [
        "title" =>"setelah_input"
    ]);
});

// !--barang--

Route::get('Vendor/Kelola_Barang/kelola_barangstep1', function () {
    return view('Vendor/Kelola_Barang/kelola_barangstep1', [
        "title" =>"Kelola_barangstep1"
    ]);
});

Route::get('Vendor/Kelola_Barang/layanan_step1', function () {
    return view('Vendor/Kelola_Barang/layanan_step1', [
        "title" =>"layanan_step1"
    ]);
});

Route::get('Vendor/Kelola_Barang/layanan_step2', function () {
    return view('Vendor/Kelola_Barang/layanan_step2', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola_Barang/layanan_step3', function () {
    return view('Vendor/Kelola_Barang/layanan_step3', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola_Barang/layanan_step4', function () {
    return view('Vendor/Kelola_Barang/layanan_step4', [
        "title" =>"layanan_step4"
    ]);
});

Route::get('Vendor/Kelola_Barang/tambah_layanan', function () {
    return view('Vendor/Kelola_Barang/tambah_layanan', [
        "title" =>"tambah_layanan"
    ]);
});

Route::get('Vendor/Kelola_Barang/tambah_jenispaket', function () {
    return view('Vendor/Kelola_Barang/tambah_jenispaket', [
        "title" =>"tambah_jenispaket"
    ]);
});
Route::get('Vendor/Kelola_Barang/pilih_jenispaket', function () {
    return view('Vendor/Kelola_Barang/pilih_jenispaket', [
        "title" =>"pilih_jenispaket"
    ]);
});

Route::get('Vendor/Kelola_Barang/pengelolaan_barang', function () {
    return view('Vendor/Kelola_Barang/pengelolaan_barang', [
        "title" =>"pengelolaan_barang"
    ]);
});

Route::get('Vendor/Kelola_Barang/Rincian_lahan', function () {
    return view('Vendor/Kelola_Barang/Rincian_lahan', [
        "title" =>"rincian_lahan"
    ]);
});

Route::get('Vendor/Kelola_Barang/setelah_input', function () {
    return view('Vendor/Kelola_Barang/setelah_input', [
        "title" =>"setelah_input"
    ]);
});

Route::get('Vendor/Kelola_Barang/atur_alamat', function () {
    return view('Vendor/Kelola_Barang/atur_alamat', [
        "title" =>"atur alamat"
    ]);
});

Route::get('Vendor/Kelola_Barang/pilih_lokasi', function () {
    return view('Vendor/Kelola_Barang/pilih_lokasi', [
    ]);
});

// <!--bangunan-->

Route::get('Vendor/Kelola-Bangunan/kelola_bangunan', function () {
    return view('Vendor/Kelola-Bangunan/kelola_bangunan', [
        "title" =>"Kelola_bangun"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/Kelola_bangunanstep1', function () {
    return view('VendorKelola-Bangunan/Kelola_bangunanstep1', [
        "title" =>"Kelola_bangunanstep1"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/layanan_step1', function () {
    return view('Vendor/Kelola-Bangunan//layanan_step1', [
        "title" =>"layanan_step1"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/layanan_step2', function () {
    return view('Vendor/Kelola-Bangunan/layanan_step2', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/layanan_step3', function () {
    return view('Vendor/Kelola-Bangunan/layanan_step3', [
        "title" =>"layanan_step3"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/atur_alamat', function () {
    return view('Vendor/Kelola-Bangunan/atur_alamat', [
        "title" =>"atur alamat"
    ]);
});

Route::get('Vendor/Kelola-Bangunan/setelah_input', function () {
    return view('Vendor/Kelola-Bangunan/setelah_input', [
        "title" =>"setelah_input"
    ]);
});

//<!--pickup-->

Route::get('Vendor/Kelola-PickUp/kelola_pickup', function () {
    return view('Vendor/Kelola-PickUp/kelola_pickup', [
        "title" =>"Kelola_pickupstep1"
    ]);
});

Route::get('Vendor/Kelola-PickUp/layanan_step1', function () {
    return view('Vendor/Kelola-PickUp//layanan_step1', [
        "title" =>"layanan_step1"
    ]);
});

Route::get('Vendor/Kelola-PickUp/layanan_step2', function () {
    return view('Vendor/Kelola-PickUp/layanan_step2', [
        "title" =>"layanan_step2"
    ]);
});

Route::get('Vendor/Kelola-PickUp/layanan_step3', function () {
    return view('Vendor/Kelola-PickUp/layanan_step3', [
        "title" =>"layanan_step3"
    ]);
});

Route::get('Vendor/Kelola-PickUp/atur_alamat', function () {
    return view('Vendor/Kelola-PickUp/atur_alamat', [
        "title" =>"atur alamat"
    ]);
});

Route::get('Vendor/Kelola-PickUp/setelah_input', function () {
    return view('Vendor/Kelola-PickUp/setelah_input', [
        "title" =>"setelah_input"
    ]);
});

Route::get('/vendor/dashboard', function () {
    return view('/vendor/dashboard',[
        "title" => "vendor"
    ]);
});

Route::get('vendor/keuangan/pemasukan', function () {
    return view('vendor/keuangan/pemasukan', [
        "title" =>"pemasukan"
    ]);
});


Route::get('vendor/keuangan/penghasilan', function () {
    return view('vendor/keuangan/penghasilan', [
        "title" =>"penghasillan"
    ]);
});

Route::get('vendor/keuangan/penarikan', function () {
    return view('vendor/keuangan/penarikan', [
        "title" =>"penarikan"
    ]);
});

Route::get('vendor/keuangan/saldo', function () {
    return view('vendor/keuangan/saldo', [
        "title" =>"saldo"
    ]);
});
Route::get('vendor/keuangan/tarikdana', function () {
    return view('vendor/keuangan/tarikdana', [
        "title" =>"tarikdana"
    ]);
});
Route::get('vendor/keuangan/rekening', function () {
    return view('vendor/keuangan/rekening', [
        "title" =>"tarikdana"
    ]);
});


//Finance
Route::controller(FinanceController::class)->group(function(){
    Route::get('/finance/page', 'index')->middleware('role:finance')->name('finance.index');
    Route::get('/finance/transaksi/transaksiuser', 'transaksiuser')->middleware('auth');
    Route::get('/finance/transaksi/transaksivendor', 'transaksivendor')->middleware('auth');
    Route::get('/finance/transaksi/detailtransaksiuser', 'detailtransaksiuser')->middleware('auth');
    Route::get('/finance/transaksi/detailtransaksivendor', 'detailtransaksivendor')->middleware('auth');
    Route::get('/finance/DataPenarikan/penarikan', 'penarikan')->middleware('auth');
    Route::get('/finance/DataPenarikan/vendor', 'vendor')->middleware('auth');
    Route::get('/finance/DataPenarikan/history', 'history')->middleware('auth');
    Route::get('/finance/profilefinance', 'profile')->middleware('auth');
});


//crud tentang
route::get('/Tentang/edit', [TentangController::class, 'edit']);
route::get('/Tentang/simpan', [TentangController::class, 'update']);
Route::resource('tentang', TentangController::class);

//crud kontak
route::get('/Kontak/edit', [KontakController::class, 'edit']);
route::get('/Kontak/simpan', [KontakController::class, 'update']);
Route::resource('kontak', KontakController::class);

//crud sliderhome
route::get('/Sliderhome/edit', [SliderhomeController::class, 'edit']);
route::get('/Sliderhome/simpan', [SliderhomeController::class, 'update']);
Route::resource('sliderhome', SliderhomeController::class);

//crud slider kontak
route::get('/Sliderkontak/edit', [SliderkontakController::class, 'edit']);
route::get('/Sliderkontak/simpan', [SliderkontakController::class, 'update']);
Route::resource('sliderkontak', SliderkontakController::class);

//slider tentang
route::get('/Slidertentang/edit', [SlidertentangController::class, 'edit']);
route::get('/Slidertentang/simpan', [SlidertentangController::class, 'update']);
Route::resource('slidertentang', SlidertentangController::class);

//admin-tambah layanan
route::get('/admin/layanan/layanan', [LayananController::class, 'index'])->name('/layanan');
route::post('/create', [LayananController::class, 'post'])->name('/post');

//admin-sublayanan
route::get('/sublayanan', [SubLayananController::class, 'index'])->name('/sublayanan');
route::post('/create', [SubLayananController::class, 'post'])->name('/post');

//gambarkecil
route::get('/Gambarkecil/edit', [GambarkecilController::class, 'edit']);
route::get('/Gambarkecil/simpan', [GambarkecilController::class, 'update']);
Route::resource('gambarkecil', GambarkecilController::class);
