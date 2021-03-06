<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'user_id'];

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_post', 'post_id', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
