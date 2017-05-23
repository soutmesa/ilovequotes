<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table = "category_post";
    protected $fillable = ['category_id', 'post_id'];
}
