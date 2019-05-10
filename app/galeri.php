<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table='galeris';
    protected $fillable=['title','pictgambar'];
    protected $dates=['published_at'];

    public function scopePublished($query)
    {
        return $query->where('published_at','<=',now());
    }
    public function scopePostIt($query)
    {
        return $query->published();
    }

}
