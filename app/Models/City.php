<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'description', 'department_id'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
