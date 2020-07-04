<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'customer_name','customer_id','size','delivery_origin','shipping_adress', 'delivery_at', 'remarks','deliver_name','deliver_id'
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];
}
