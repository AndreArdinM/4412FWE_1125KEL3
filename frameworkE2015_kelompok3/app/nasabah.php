<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nasabah extends Model
{
    protected $table = 'nasabah';
    protected $fillable = ['nama','alamat','jenis_kelamin','tabungan','nomor_induk','status','kewarganegaraan','teller_id','kategori_id','kantorcabang_id'];

    // public function teller()
    // {
    // 	return $this->hasMany(teller::class);
    // }

    public function teller()
    {
      return $this->belongsTo(teller::class, 'teller_id');
    }

    public function kategori()
    {
      return $this->belongsTo(kategori::class, 'kategori_id');
    }

    public function kantorcabang()
    {
      return $this->belongsTo(kantorcabang::class, 'kantorcabang_id');
    }



    // public function kantorcabang(){
    // 	return $this->hasOne(kantorcabang::class);
    // }

    // public function kategori(){
    // 	return $this->hasOne(kategori::class);
    // }

     public function listnamateller()
    {
      $out=[];
       foreach ($this ->all() as $teller) {
           $out[$teller->id_teller]="{$teller->nama}";
       }
       return $out;
    }
}
