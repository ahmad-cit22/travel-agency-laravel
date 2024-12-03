<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function location()
    {
        return $this->belongsTo(HotelLocation::class,'hotel_location_id','id');
    }

    public function rooms()
    {
        return $this->hasMany(HotelRoom::class);
    }

    public function hotel_medias()
    {
        return $this->hasMany(HotelMedia::class);
    }

    public function hotel_facilities()
    {
        return $this->hasMany(HotelFacility::class);
    }
}
