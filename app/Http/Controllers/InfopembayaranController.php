<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infopembayaran;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class InfopembayaranController extends Controller
{
    public function index()
    {
        $data = [
            "data_info" => Infopembayaran::get()
        ];

        return view("admin.layanan.Info_pembayaran.info", $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("info");
        }

        Infopembayaran::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "data" => Infopembayaran::where("id", $request->id)->first()
        ];

        return view("admin.layanan.Info_pembayaran.edit", $data);
    }

    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("info");
        } else {
            $data = $request->gambarLama;
        }

        Infopembayaran::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);

        return back();
    }
    public function destroy(Infopembayaran $info)
    {
        //delete image
        Storage::delete('info'. $info->image);

        //delete post
        $info->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}
