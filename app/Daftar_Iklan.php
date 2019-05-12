<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar_Iklan extends Model
{
    protected $table='daftar__iklans';
    protected $fillable=['profile_id','gambar_iklan','published_at','jenis_iklan'];

    public function profile()
    {
        return $this->belongsToMany(Profile::class);
    }
}
