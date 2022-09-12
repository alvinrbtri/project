<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubLayanan extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama', 
        'harga',
        'deskripsi',
        'alamat', 
        'email', 
        'status1', 
        'status2',
        'gambar'];
}
