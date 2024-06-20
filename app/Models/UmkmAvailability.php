<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmAvailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'umkm_id',
        'day',
        'open',
        'close',
        'located',
    ];
}
