<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listsemployee extends Model
{
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
