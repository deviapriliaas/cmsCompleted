<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
   protected $table='categories';
   protected $fillable=['name','id'];
  

   public function posts()
   {
      return $this->hasMany(Post::class);
   }
}
