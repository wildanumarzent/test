<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    protected $table ='table_konsumen';
    protected $fillable=['nama_konsumen','jenis_kendaraan', 'no_polisi', 'tanggal_lahir','jenis_kelamin','no_hp'];

    public function transaksi()
    {
    	return $this->belongsTo('App\Transaksi');
    }
}
