<?php

namespace App\Models;

use App\Models\User;
use App\Models\Permission;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = [
        'name','display_name', 'description'
    ];

    public function users() {
        return $this->belongsToMany(User::class,'role_user');
    }

    public function permissions() {
        return $this->belongsToMany(Permission::class,'permission_role');
    }
}
