<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // Nama tabel (karena bukan jamak "abouts")
    protected $table = 'about';

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'gambar_besar',
        'gambar_kanan',
        'title',
        'deskripsi',
    ];
}
