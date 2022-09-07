<?php

namespace App\Http\Controllers;
use Alert;
use App\Models\Layanan;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('admin.layanan.layanan', compact('layanan'));
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'slug' => '',
            'deskripsi' => '',
            'gambar' => 'mimes:jpg,jpeg,png'
        ]);

        Layanan::create([
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
            $layanan = $request->all();

            Layanan::where(['id' => $id])->update([
                'judul' => $layanan['judul'],
                'slug' => $layanan['slug'],
                'deskripsi' => $layanan['deskripsi'],
                'gambar' => $layanan['gambar']
            ]);

            return redirect()->back()->with('berhasil', 'Layanan berhasil diupdate');
        }
    }

    public function show($id)
    {
        Layanan::where(['id' => $id]);

        return view('admin.layanan.layanan');
    }

}
