<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['nama','alamat','no_nik','no_hp'];
    public $timestamps = true;

    public function Mobil()
    {
    	return $this->belongsToMany('App\Mobil','pemesanans','mobil_id','customer_id');
    }

    public function Supir()
    {
    	return $this->belongsToMany('App\Supir','pemesanans','supir_id','customer_id');
    }

}
