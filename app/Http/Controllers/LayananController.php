<?php

namespace App\Http\Controllers;
use Auth;
use Alert;
use App\Models\Layanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('admin.layanan.layanan.layanan', compact('layanan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'slug' => '',
            'deskripsi' => '',
            'gambar' => 'mimes:jpg,jpeg,png'
        ]);

        if($request->file("gambar")) {
            $data = $request->file("gambar")->store("layanan");
        }

        Layanan::create([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'deskripsi' => $request->deskripsi,
            'gambar' => $data
        ]);
        return redirect()->back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit (Request $request)
    {
        $data = [
            "edit" => Layanan::where("id", $request->id)->first()
        ];

        return view("admin.layanan.layanan.layanan_edit", $data);
    }
    
    public function update(Request $request)
    {
        if($request->file("gambar_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $data = $request->file("gambar_new")->store("layanan");
        }else {
            $data = $request->gambarLama;
        }
       
            Layanan::where('id', $request->id)->update([
                'judul' => $request->judul,
                'slug' => $request->slug,
                'deskripsi' => $request->deskripsi,
                'gambar' => $data
            ]);

            return back()->with('berhasil', 'Layanan berhasil diupdate');
        
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => Layanan::where("id", $request->id)->first()
        ];

        return view("admin.layanan.layanan.layanan_detail", $data);
    }

    public function destroy($id)
    {
        $sub = Layanan::where("id", $id)->first();
        Storage::delete($sub->gambar);
        $sub->delete();
        return back()->with('berhasil', 'Layanan berhasil dihapus!');
    }
}
