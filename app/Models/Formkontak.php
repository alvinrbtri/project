<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formkontak extends Model
{
    use softDeletes;
    protected $table = 'formkontak';
    protected $fillable = [
        'lokasi',
        'email',
        'call',
        'maps',
    ];
}
