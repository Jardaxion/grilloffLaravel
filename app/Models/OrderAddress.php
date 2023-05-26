<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'address' => 'array',
    ];

    protected const ADDRESS_ROWS = [
        ''
    ];
}
