<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendor;

class Image extends Model
{
    use HasFactory;

    /**
    * The server that belong to the image.
    */
    public function roles()
    {
        return $this->belongsToMany(Vendor::class, 'image_vendor');
    }
}
