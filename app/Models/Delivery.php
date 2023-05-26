<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    const TYPE_PRICE = [
        'custom' => 'Установленное значение',
        'sdek' => 'СДЭК',
        'potchta_rus' => 'Почта России',
    ];
}
