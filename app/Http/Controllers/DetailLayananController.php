<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailLayanan;
use Illuminate\Routing\Controller;

class DetailLayananController extends Controller
{

    public function index()
    {
        $detail_layanan = DetailLayanan::all();
        return view('admin.layanan.detail_layanan.detail_layanan', compact('detail_layanan'));
    }
   
}
