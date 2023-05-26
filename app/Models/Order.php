<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Order extends Model
{

    public const STATUS = [
        0 => 'новый',
        1 => 'в пути',
        2 => 'доставлен',
    ];

    protected $guarded = [];

    protected $casts = [
        'order' => 'array',
    ];

    public function getStatus(){
        return Arr::get(self::STATUS,$this->status);
    }

    public function transaction(){

        return $this->hasOne(Transaction::class,'order_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class,'order_id');
    }

    public function contacts(){
        return $this->belongsTo(OrderContact::class,'order_contact_id');
    }

    public function address(){
        return $this->belongsTo(OrderAddress::class,'order_address_id');
    }

    public function delivery(){
        return $this->belongsTo(OrderDelivery::class,'delivery_order_id');
    }


}
