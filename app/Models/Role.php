<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function children()
    {
        return $this->hasMany(Role::class, 'parent_id');
    }
    public function userRoles()
    {
        return $this->hasMany(UserRole::class, 'role_id');
    }
}
