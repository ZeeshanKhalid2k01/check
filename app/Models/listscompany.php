<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listscompany extends Model
{
    public function companys()
    {
        return $this->hasMany(Company::class);
    }
}
