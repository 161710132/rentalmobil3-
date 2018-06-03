<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $fillable = ['nama_merk'];
	public $timestamps = true;

	public function Mobil()
	{
		return $this->HasMany('App\Mobil','merk_id');
	}
}


