<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';

    protected $fillable = ['cat_name','cat_image','cat_is_active ','cat_description','cat_meta_title','cat_meta_keyword '];

    protected $primarykey = 'cat_id ';
}
