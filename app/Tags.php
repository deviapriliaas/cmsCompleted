<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table='tags';
    protected $fillable=['name','id'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function post_tags()
    {
        return $this->belongToMany(posts_tag::class);
    }
    
}
