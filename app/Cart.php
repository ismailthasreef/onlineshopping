<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table ='carts';

    protected $fillable = ['p_id','car_name','car_code','car_weight','car_qty','car_price','car_total','session_id'];

    protected $primerykey = 'car_id';
}
