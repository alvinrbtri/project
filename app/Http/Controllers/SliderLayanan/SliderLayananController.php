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
        // $data = [
        //     "data_slider" => SliderLayanan::get()
        // ];

        // return view("admin.slider.slider_layanan.tambah", $data);
        $slider_layanans = SliderLayanan::all();
        return view("admin.slider.slider_layanan.tambah", compact('slider_layanans'));
    }

    // public function store(Request $request)
    // {
        
    //     $count = SliderLayanan::where("gambar", $request->gambar)->count();
    //     $count = SliderLayanan::where("judul", $request->judul)->count();
    //     $count = SliderLayanan::where("deskripsi", $request->deskripsi)->count();

    //     if($count > 0){
    //         return back();
    //     } else {
    //         SliderLayanan::create($request->all());

    //         return back();
    //     }
    // }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'gambar' => 'required|mimes:jpg,png,jpg',
    //         'judul' => 'required|min:255',
    //         'deskripsi' => 'required|min:10'
    //     ]);

    //     $gambar = $request->file('gambar');
    //     $gambar->storeAs('public/app/SliderLayanan', $gambar->hashName());

    //     SliderLayanan::create([
    //         'gambar' => $gambar->hashName(),
    //         'judul' => $request->judul,
    //         'deskripsi' => $request->deskripsi
    //     ]);

    //     return back()->with('berhasil', "ditambahkan");
    // }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|min:100',
            'deskripsi' => 'required|min:100'
        ]);

        $gmbr = $request->file('gambar');
        $gmbr->storeAs('/public/app/SliderLayanan/', $gmbr->hashName());

        SliderLayanan::created([
            'gambar' => $gmbr->hashName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return back()->with('berhasil', "ditambarkan");
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => SliderLayanan::where("id", $request->id)->first()
        ];

        return view("admin.slider.slider_layanan.edit", $data);
    }

    public function update(Request $request, SliderLayanan $slider_layanan)
    {
        // SliderLayanan::where("id", $request->id)->update
        // ([
        //     "gambar" => $request->gambar,
        //     "judul" => $request->judul,
        //     "deskripsi" => $request->deskripsi
        // ]);

        // return back();
        // if($request->hasFile('gambar')){
        //     $gambar = $request->file('gambar');
        //     $gambar->storeAs('public/app/SliderLayanan/', $gambar->hashName());

        //     Storage::delete('public/app/SliderLayanan/', $slider_layanan->gambar);

        //     $slider_layanan->update([
        //         'gambar' => $gambar->hashName(),
        //         'judul' => $request->judul(),
        //         'deskripsi' => $request->deskripsi()
        //     ]);
        // } else {
        //     $slider_layanan->update([
        //         'gambar' => $request->gambar->hashName(),
        //         'judul' => $request->judul,
        //         'deskripsi' => $request->deskripsi
        //     ]);
        // }

        $this->validate($request, [
            'gambar' => 'image|mimes:jpeg,png,jpg',
            'judul' => 'required|min:10',
            'deskripsi' => 'required|min:255'
        ]);

        if($request->hasFile('gambar')){
            $gmbr = $request->file('gambar');
            $gmbr->storeAs('/public/app/SliderLayanan/', $gmbr->hashName());

            Storage::delete('/public/app/SliderLayanan/');

            $slider_layanan->update([
                'gambar' => $gmbr->hashName(),
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi
            ]);
        } else {
            $slider_layanan->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi
            ]);
        }

        return back()->with('berhasil, diupdate');
    }

        public function destroy(SliderLayanan $slider_layanan)
        {
            Storage::delete('public/app/SliderLayanan/'. $slider_layanan->gambar);

            $slider_layanan->delete();

            return back()->with('berhasil,di delete');
        }

    }

