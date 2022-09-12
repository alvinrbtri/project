<?php

namespace App\Http\Controllers;

use App\Models\SubSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubSliderController extends Controller
{
    public function index()
    {
        $subslider = SubSlider::all();
        return view('admin.layanan.sub_slider', compact('subslider'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'deskripsi_singkat' => '',
            'status' => '',
            'gambar' => 'mimes:jpg,jpeg,png'
        ]);

        if ($request->file("gambar")) {
            $data = $request->file("gambar")->store("subslider");
        }

        SubSlider::create([
            'judul' => $request->judul,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'status' => $request->status,
            // 'gambar' => $request-> gambar
            'gambar' => $data
        ]);
        return redirect()->back()->with('berhasil', 'Slider Sublayanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => SubSlider::where("id", $request->id)->first()
        ];

        return view("admin.layanan.sub_slider_edit", $data);
    }

    public function update(Request $request)
    {
        if ($request->file("gambar_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("gambar_new")->store("subslider");
        } else {
            $data = $request->gambarLama;
        }

        SubSlider::where('id', $request->id)->update([
            "judul" => $request->judul,
            "deskripsi_singkat" => $request->deskripsi_singkat,
            "status" => $request->status,
            "gambar" => $data
        ]);

        return back()->with('berhasil', 'Layanan berhasil diupdate');
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => SubSlider::where("id", $request->id)->first()
        ];

        return view("admin.layanan.sub_slider_detail", $data);
    }

    public function destroy($id)
    {
        $sub = SubSlider::where("id", $id)->first();

        Storage::delete($sub->gambar);

        $sub->delete();

        return back()->with('berhasil', 'SubSlider Berhasil di Hapus');
    }
}
