<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Tentang',
            'desc'  => 'Layanan penitipan pertama di Indonesia yang terdaftar dan telah dipercaya kredibiltasnya',
            'desc2' => ' Kami menyediakan jasa penitipan barang bagi anda yang mau menitipkan barangnya.
            Selain itu juga kami menyediakan jasa penitipan rumah dan kendaraan anda. Tersedia di 3 Kota
            Besar',
        ];

        return view('user.tentang', [
            'data' => $data,
        ]);
    }
}
