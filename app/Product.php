<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='Products';

    protected $fillable = ['cat_id ','p_name ','p_code','p_description ','p_image','p_is_active ','p_meta_title','p_meta_keyword','cat_meta_des'];

    protected $primerykey = 'p_id';
}
