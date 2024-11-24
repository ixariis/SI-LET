<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //
    protected $fillable = ['nama', 'nip'];

    /**
     * Relasi many-to-many dengan Rolee melalui tabel user_roles.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'dosen_id', 'role_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }   
}
