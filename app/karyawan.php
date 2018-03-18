<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    //
     protected $table = 'karyawans';
	protected $primaryKeys = 'id';
      protected $fillable = ['nama','bidang','email','no_hp','alamat'];
    protected $visible =  ['nama','bidang','email','no_hp','alamat'];
    public  $timestamps = true;
}
