<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function status()
    {
        return $this->belongsTo(status::class ,'status_id');
    }
}
