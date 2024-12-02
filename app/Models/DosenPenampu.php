<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenPenampu extends Model
{
    use HasFactory;
    protected $table = 'dosen_penampu';
    protected $filltable = [
        'nip',
        'kodemk',
    ];
}
