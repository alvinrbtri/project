<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubDetailController extends Controller
{
    public function index()
    {
        $sublayanan = SubLayanan::all();
        return view('admin.layanan.sub_layanan', compact('sublayanan'));
    }

    public function post(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'nama' => '',
            'harga' => '',
            'alamat' => '',
            'deskripsi' => '',
            'status1' => '',
            'status2' => '',
            'gambar' => 'mimes:jpg,jpeg,png'
        ]);

        if ($request->file("gambar")) {
            $data = $request->file("gambar")->store("sublayanan");
        }

        SubLayanan::create([
            'nama' => $request-> nama,
            'harga' => $request-> harga,
            'alamat' => $request-> alamat,
            'deskripsi' => $request-> deskripsi,
            'status1' => $request-> status1,
            'status2' => $request-> status2,
            // 'gambar' => $request-> gambar
            'gambar' => $data
        ]);
        return redirect()->back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit (Request $request, $id)
    {
        if($request->isMethod('post'))
        {
            $sublayanan = $request->all();

            SubLayanan::where(['id' => $id])->update([
                'nama' => $sublayanan['nama'],
                'harga' => $sublayanan['harga'],
                'alamat' => $sublayanan['alamat'],
                'status1' => $sublayanan['status1'],
                'status2' => $sublayanan['status2'],
                'gambar' => $sublayanan['gambar']
            ]);

            return redirect()->back()->with('berhasil', 'Layanan berhasil diupdate');
        }
    }

    public function show($id)
    {
        SubLayanan::where(['id' => $id]);

        return view('admin.layanan.sub_layanan');
    }
}
