<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    use HasFactory;

    public function package()
    {
        return $this->belongsTo(Package::class,'package_id','id');
    }

    public function guide()
    {
        return $this->belongsTo(Guide::class,'guide_id','id');
    }
}
