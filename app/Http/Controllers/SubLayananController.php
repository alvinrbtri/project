<?php

namespace App\Http\Controllers;

use App\Models\SubLayanan;
use Illuminate\Http\Request;

class SubLayananController extends Controller
{
    public function index()
    {
        $sublayanan = SubLayanan::all();
        return view('admin.layanan.sub_layanan', compact('sublayanan'));
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'nama' => '',
            'harga' => '',
            'alamat' => '',
            'status1' => '',
            'status2' => '',
            'gambar' => 'mimes:jpg,jpeg,png'
        ]);

        SubLayanan::create([
            'judul' => $request->input('judul'),
            'slug' => $request->input('slug'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $request->input('gambar')
        ]);
        return redirect()->back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit (Request $request, $id)
    {
        if($request->isMethod('post'))
        {
            $sublayanan = $request->all();

            SubLayanan::where(['id' => $id])->update([
                'judul' => $sublayanan['judul'],
                'slug' => $sublayanan['slug'],
                'deskripsi' => $sublayanan['deskripsi'],
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
