<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'gambar'
    ];

    // public function getRouteKeyName()
    // {    
    //     return 'slug' ;
    // }

    // public function sluggable(): array
    // {
    //     returphpn[
    //         'slug' => [
    //             'source' => 'judul'
    //         ]
    //     ];
    // }
}
