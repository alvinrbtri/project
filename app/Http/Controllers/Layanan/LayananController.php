<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function index()
    {
        $data = [
            "data_layanan" => Layanan::get()
        ];

        return view("admin.layanan.index", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'slug' => '',
            'deskripsi' => '',
            'gambar' => 'mimes:jpg,jpeg,png'
        ]);

        if($request->file("gambar")) {
            $data = $request->file("gambar")->store("layanan");
        }

        Layanan::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Layanan::where("id", $request->id)->first()
        ];

        return view("admin.layanan.edit", $data);
    }

}
