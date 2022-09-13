<?php

namespace App\Http\Controllers;

use App\Models\SubLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubLayananController extends Controller
{
    public function index()
    {
        $sublayanan = SubLayanan::all();
        return view('admin.layanan.sub_layanan.sub_layanan', compact('sublayanan'));
    }

    public function store(Request $request)
    {
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
            'gambar' => $data
        ]);
        return redirect()->back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit (Request $request)
    {
        $data = [
            "edit" => SubLayanan::where("id", $request->id)->first()
        ];

        return view("admin.layanan.sub_layanan.sub_layanan_edit", $data);

    }

    public function update(Request $request)
    {
        if ($request->file("gambar_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("gambar_new")->store("sublayanan");
        } else {
            $data = $request->gambarLama;
        }
        SubLayanan::where("id", $request->id)->update([
            "nama" => $request->nama,
            "harga" => $request->harga,
            "alamat" => $request->alamat,
            "deskripsi" => $request->deskripsi,
            "status1" => $request->status1,
            "status2" => $request->status2,
            'gambar' => $data
        ]);

        return back()->with('berhasil', 'Layanan berhasil diupdate');

    }

    public function show(Request $request)
    {
        $data = [
            "detail" => Sublayanan::where("id", $request->id)->first()
        ];

        return view("admin.layanan.sub_layanan.sub_layanan_detail", $data);
    }

    public function destroy($id)
    {
        $sub = SubLayanan::where("id", $id)->first();

        Storage::delete($sub->gambar);

        $sub->delete();

        return back()->with('berhasil', 'Sublayanan berhasil di hapus!');
    }

}
