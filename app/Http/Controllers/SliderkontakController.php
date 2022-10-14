<?php

namespace App\Http\Controllers;

use App\Models\Sliderkontak;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class SliderkontakController extends Controller
{
    public function index()
    {
        $data = [
            "data_shome" => Sliderkontak::get()
        ];

        return view("admin.home.Sliderkontak.sliderkontak", $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("sliderkontak");
        }

        Sliderkontak::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "data" => Sliderkontak::where("id", $request->id)->first()
        ];

        return view("admin.home.Sliderkontak.edit", $data);
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

            $data = $request->file("image_new")->store("sliderkontak");
        } else {
            $data = $request->gambarLama;
        }

        Sliderkontak::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);

        return back();
    }
    public function destroy(Sliderkontak $sliderkontak)
    {
        //delete image
        Storage::delete('sliderkontak'. $sliderkontak->image);

        //delete post
        $sliderkontak->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
    
}


