<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_tags extends Model
{
    protected $table='table';
    protected $fillable=['post_id','tags_id'];

    public function tags()
    {
        return $this->belongsTo(Tags::class);
    }
    public function posts(){
        return $this->belongsTo(Post::class);
    }

}
