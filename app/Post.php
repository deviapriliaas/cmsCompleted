<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use SoftDeletes;
    protected $table='posts';
    protected $fillable=['title','description','content','image','published_at','category_id'];
    protected $primaryKey='id';
 
   

    public function deleteImage()
    {
        Storage::delete($this->image);
    }
    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
}
