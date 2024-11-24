<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen'; // Nama tabel di database
    protected $fillable = [
        'nip',
        'nama',
        'email',
        'fakultas',
        'jurusan',
 
    ];
}
