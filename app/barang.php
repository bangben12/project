<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    //
     protected $table = 'barangs';
	protected $primaryKeys = 'id';
     protected $fillable = ['nama','jenis','merek','warna','jumlah','cover'];
    protected $visible = ['nama','jenis','merek','warna','jumlah','cover'];
    public  $timestamps = true;

    	public function transaksi(){
			return $this->hasMany('App\Transaksi');
	}
}
