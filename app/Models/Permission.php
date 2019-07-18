<?php

namespace App\Models;

use App\Models\Role;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $fillable = [
        'name','display_name', 'description'
    ];

    public function roles() {
        return $this->belongsToMany(Role::class,'permission_role');
    }
}
