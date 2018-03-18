<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    //
     protected $table = 'konsumens';
	protected $primaryKeys = 'id';
      protected $fillable = ['nama','email','no_hp','alamat'];
    protected $visible =  ['nama','email','no_hp','alamat'];
    public  $timestamps = true;

    public function transaksi(){
			return $this->hasMany('App\Transaksi');
	}
}
