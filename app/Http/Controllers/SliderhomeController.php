<?php

namespace App\Http\Controllers;


use App\Models\Sliderhome;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Sliderhome as ModelsSliderhome;

class SliderhomeController extends Controller
{
    public function index()
    {
        $data = [
            "data_shome" => Sliderhome::get()
        ];

        return view("admin.home.Sliderhome.sliderhome", $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("slidehome");
        }

        Sliderhome::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Sliderhome::where("id", $request->id)->first()
        ];

        return view("admin.home.Sliderhome.edit", $data);
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

            $data = $request->file("image_new")->store("slidehome");
        } else {
            $data = $request->gambarLama;
        }

        Sliderhome::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);

        return back();
    }
    public function destroy(Sliderhome $sliderhome)
    {
        //delete image
        Storage::delete('sliderhome'. $sliderhome->image);

        //delete post
        $sliderhome->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
    
}
