<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderContact extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'contacts' => 'array',
    ];

    protected const CONTACT_ROWS = [
        'name' => [
            'name' => 'Ф.И.О',
            'validation' => null,
        ],
        'phone' => [
            'name' => 'Телефон',
            'options' => 'required',
            'validation' => 'required',
        ],
        'email' => [
            'name' => 'Email',
            'options' => 'required',
            'validation' => 'required',
        ],
        'comment' => [
            'name' => 'Комментарий',
            'options' => '',
            'validation' => '',
        ],
    ];

    public function getContactsRows(){
        return self::CONTACT_ROWS;
    }
}
