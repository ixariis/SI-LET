<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    //
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
