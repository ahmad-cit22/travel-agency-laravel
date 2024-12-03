<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelLocation extends Model
{
    use HasFactory;

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
