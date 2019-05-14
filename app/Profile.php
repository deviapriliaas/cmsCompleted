<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table='profiles';
    protected $fillable=['nomor_telepon','nomor_ktp','alamat'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
   
    
}
