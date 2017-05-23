<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kantorcabang extends Model
{
    protected $table = 'kantorcabang';
    protected $fillable = ['nama_kantor','alamat'];
    protected $guarded = ['id'];

    // public function nasabah(){
    // 	return $this->belongsTo(nasabah::class);
    // }

        public function nasabah(){
      return $this->hasOne(nasabah::class);
    }


    public function manajer(){
    	return $this->belongsTo(manajer::class);
    }
     public function listkantor()
    {
      $out=[];
       foreach ($this ->all() as $kantor) {
           $out[$kantor->kantorcabang_id]="{$kantorcabang->nama_kantor}";
       }
       return $out;
    }

}
