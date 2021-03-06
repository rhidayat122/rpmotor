<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motor_jual extends Model
{
    protected $fillable = ['merk_motor','tahun_keluar','no_stnk','no_polisi','no_bpkb','harga_jual','warna','no_mesin','no_rangka'];

    public function motor_jual()
    {
    	return $this->hasMany('App\transaksi_beli');
    	return $this->belongsTo('App\motor');
    }
}