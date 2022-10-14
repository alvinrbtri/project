<?php

namespace App\Http\Controllers;

use App\Models\Gambarkecil;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class GambarkecilController extends Controller
{
    
    public function index()
    {
        $data = [
            "data_gambar" => Gambarkecil::get()
        ];

        return view("admin.layanan.sublayanan_detail.Gambarkecil.gambarkecil", $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("gambarkecil");
        }

        Gambarkecil::create([
            'image' => $data
        ]);
        return back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "data" => Gambarkecil::where("id", $request->id)->first()
        ];

        return view("admin.layanan.sublayanan_detail.Gambarkecil.edit", $data);
    }

    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("gambarkecil");
        } else {
            $data = $request->gambarLama;
        }

        Gambarkecil::where("id", $request->id)->update([
            'image' => $data
        ]);

        return back();
    }


    public function destroy(Gambarkecil $gambarkecil)
    {
        //delete image
        Storage::delete('gambarkecil'. $gambarkecil->image);

        //delete post
        $gambarkecil->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}
