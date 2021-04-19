<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendor;
use App\Models\User;

class Server extends Model
{
    use HasFactory;

    /**
     * Get the User that owns the Subscription.
     */
    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    /**
     * Get the users for the server.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_server')->withTimestamps();
    }
}
