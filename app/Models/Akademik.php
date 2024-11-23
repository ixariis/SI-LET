<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    use HasFactory;

    protected $table = 'akademik'; // Nama tabel di database
    protected $fillable = [
        'nama',
        'nip',
        'fakultas',
        'e-mail',
    ];
}
