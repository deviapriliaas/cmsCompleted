<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran_iklan extends Model
{
    protected $table='pembayaran_iklan';
    protected $fillable=['iklan_id','no_bukti_ref'];

    public function daftar_iklan()
    {
        return $this->belongsTo(Daftar_iklan::class);
    }
}
