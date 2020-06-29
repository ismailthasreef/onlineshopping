<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';

    protected $fillable = ['cat_name','cat_image','cat_is_active ','cat_description','cat_url','cat_meta_title','cat_meta_keyword 
    ','cat_meta_des'];

    protected $primerykey = 'cat_id ';
}
