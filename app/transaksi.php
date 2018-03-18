<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //
     protected $table = 'transaksis';
	protected $primaryKeys = 'id';
     protected $fillable = ['konsumen_id','barang_id','tanggal','jumlah','harga','bayar','total','kembali'];
    protected $visible = ['konsumen_id','barang_id','tanggal','jumlah','harga','bayar','total','kembali'];
    public  $timestamps = true;

     
	public function konsumen(){
			return $this->belongsTo('App\Konsumen');
	}
	public function barang(){
			return $this->belongsTo('App\Barang');
	}
}
