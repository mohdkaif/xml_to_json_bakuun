<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $casts = [
        'status_application_code' => 'array',
        'inv_count' => 'array',
    ];
}
