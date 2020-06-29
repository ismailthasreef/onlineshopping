<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table ='discounts';

    protected $fillable = ['d_name','d_percentage'];

    protected $primerykey = 'd_id  ';
}
