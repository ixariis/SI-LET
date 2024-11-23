<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // Nama tabel di database
    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
        'e-mail',
        'status_M',
        'IPK',
        'sks',
        'total_sks',
        'semester',
        'IPS',
    ];
}
