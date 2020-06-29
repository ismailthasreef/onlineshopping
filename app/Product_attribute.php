<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_attribute extends Model
{
    protected $table ='Product_attributes';

    protected $fillable = ['p_id ','attr_weight','attr_price','attr_stock','d_id'];

    protected $primerykey = 'attr_id ';
}
