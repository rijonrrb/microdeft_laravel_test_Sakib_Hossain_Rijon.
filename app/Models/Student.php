<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function departments()
    {
        return $this->hasMany('App\Models\Department', 'department_id', 'id');
    }
}
