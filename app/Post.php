<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use SoftDeletes;
    protected $table='posts';
    protected $fillable=['id','title','description','content','image','categories_id'];
    protected $dates=['published_at'];
 
   

    public function deleteImage()
    {
        Storage::delete($this->image);
    }
    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
    //this is for edit tag in post
    public function hasTag($tagId)
    {
            return in_array($tagId, $this->tags->pluck('id')->toArray());
    }
    public function scopePublished($query)
    {
        return $query->where('published_at','<=',now());
    }
    public function scopeSearched($query)
    {
        $search=request()->query('search_query');
        if(!$search)
        {
            return $query->published();
        }
        return $query->published()->where('title','LIKE',"%{$search}%");
    }
    

}
