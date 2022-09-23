<?php

namespace App\Http\Controllers\SliderLayanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SliderLayanan\SliderLayanan;
use Illuminate\Support\Facades\Storage;

class SliderLayananController extends Controller
{
    public function index()
    {
        
        $data = [
            "data_slider" => SliderLayanan::get()
        ];

        return view('admin.slider.slider_layanan.tambah', $data);


        // $slider_layanan = SliderLayanan::all();
        // return view('admin.slider.slider_layanan.tambah', compact('slider_layanan'));
    }

    public function store(Request $request)
    {
        
        $count = SliderLayanan::where("gambar", $request->gambar)->count();
        $count = SliderLayanan::where("judul", $request->judul)->count();
        $count = SliderLayanan::where("deskripsi", $request->deskripsi)->count();

        if($count > 0){
            return back();
        } else {
            SliderLayanan::create($request->all());

            return back();
        }
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'gambar' => 'mimes:jpg,jpeg,png',
    //         'judul' => '',
    //         'deskripsi' => ''
    //     ]);

    //     if($request->file("gambar")) {
    //         $data = $request->file("gambar")->store("slider_layanan");
    //     }

    //     SliderLayanan::created([
    //         'gambar' => $data,
    //         'judul' => $request->judul,
    //         'deskripsi' => $request->deskripsi
    //     ]);

    //     return back()->with('berhasil', 'baru ditambahkan');
    // }

    public function edit(Request $request)
    {
        $data = [
            "edit" => SliderLayanan::where("id", $request->id)->first()
        ];

        return view("admin.slider.slider_layanan.edit", $data);
    }

    public function update(Request $request)
    {

        // if ($request->hasFile('gambar'))
        // {
        //     $gambar = $request->file('gambar');
        //     $gambar->storeAs('public/app/SliderLayanan', $gambar->hashName());

        //     Storage::delete('public/app/SliderLayanan'. $slider_layanan->gambar);

        //     $slider_layanan->update([
        //         'gambar' => $gambar->hashName(),
        //         'judul' => $request->judul,
        //         'deskripsi' => $request->deskripsi
        //     ]);
        // } else {
        //     $slider_layanan->update([
        //         'judul' => $request->judul,
        //         'deskripsi' => $request->deskripsi
        //     ]);
        // }

        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'deskripsi' => ''
        ]);

        if($request->file("gambar_new")) {
            if ($request->gambar) {
                Storage::delete($request->gambar);
            }

            $data = $request->file("gambar_new")->store("slider_layanan");
        } else {
            $data = $request->gambar;
        }

        SliderLayanan::where("id", $request->id)->update([
            'image' => $data,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return back()->with('berhasil, diupdate');
    }

    }

