<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar_Iklan extends Model
{
    protected $table='daftar__iklans';
    protected $fillable=['user_id','gambar_iklan','published_at','jenis_iklan'];
    protected $primaryKey='id_iklan';

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
    public function pembayaran_iklan()
    {
        return $this->hasOne(Pembayaran_iklan::class);
    }
}
