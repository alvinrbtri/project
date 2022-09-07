<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $data = SubCategory::all();
        return view('admin.kategori-layanan.showsubkategori', compact('data'));
    }
    
}
