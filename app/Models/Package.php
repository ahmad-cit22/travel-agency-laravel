<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }

    public function reviews()
    {
        return $this->hasMany(PackageReview::class);
    }

    public function images()
    {
        return $this->hasMany(PackageMedia::class)->where('media_type', 'image');
    }

    public function videos()
    {
        return $this->hasMany(PackageMedia::class)->where('media_type', 'video');
    }
}
