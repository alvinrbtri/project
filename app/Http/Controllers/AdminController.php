<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function dasboard()
    {
        return view('admin.index');
    }

    public function profile()
    {
        return view('admin.profile.profil');
    }

    public function kategorilayanan()
    {
        return view('admin.layanan-kategori.showsubkategori');
    }

    public function edit()
    {
        return view('admin.profile.edit_profil');
    }

    public function setting()
    {
        return view('admin.setting');
    }

    public function payment()
    {
        return view('admin.Data.payment.payment');
    }

    public function order()
    {
        return view('admin.Data.order.order');
    }

    public function pengaturanuser()
    {
        return view('admin.pengaturan-user');
    }

    public function barang()
    {
        return view('admin.Data.order.barang');
    }

    public function home()
    {
        return view('admin.home');
    }

    public function bangunan()
    {
        return view('admin.Data.order.bangunan');
    }

    public function pickup()
    {
        return view('admin.Data.order.pickup');
    }

    public function vendor()
    {
        return view('admin.Vendor.data_vendor');
    }

    public function trans()
    {
        return view('admin.Vendor.data_trans');
    }

    public function data_pickup()
    {
        return view('admin.Vendor.data_pick_up');
    }

    public function trans_selesai()
    {
        return view('admin.Vendor.data_trans_selesai');
    }

    public function trans_berlangsung()
    {
        return view('admin.Vendor.data_trans');
    }
}
