<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_location extends Model
{
    protected $table ='delivery_locations';

    protected $fillable = ['loc_name','loc_is_active'];

    protected $primerykey = 'loc_id ';
}
