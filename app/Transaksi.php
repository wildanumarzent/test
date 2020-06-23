<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table ='table_transaksi';
    protected $fillable=['konsumen','jenis_kendaraan', 'tanggal_masuk', 'waktu_masuk','biaya'];

    public function konsumen()
    {
    	return $this->hasOne('App\Konsumen');
    }
}
