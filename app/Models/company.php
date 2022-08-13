<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    public function listscompany()
    {
       return $this->belongsTo(Listscompany::class);
    }
}
