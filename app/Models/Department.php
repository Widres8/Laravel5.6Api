<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'description'
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
