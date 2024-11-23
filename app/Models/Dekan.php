<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dekan extends Model
{
    use HasFactory;

    protected $table = 'dekan'; // Nama tabel di database
    protected $fillable = [
        'nama',
        'nip',
        'fakultas',
        'e-mail',
    ];
}
