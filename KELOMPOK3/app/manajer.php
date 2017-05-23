<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manajer extends Model
{
    protected $table = 'manajer';
    protected $fillable = ['nama','alamat','jenis_kelamin','kantorcabang_id'];
    protected $guarded = ['id'];


    public function kantorcabang()
    {
    	return $this->belongsTo(kantorcabang::class);
    }

    // public function getkantorcabangAttribute(){
    //   return $this->kantorcabang->nama_kantor;
    // }

    public function listkantor()
    {
      $out=[];
       foreach ($this ->all() as $kantorcabang) {
           $out[$kantorcabang->kantorcabang_id]="{$kantorcabang->nama_kantor}";
    }
       return $out;

    }
}
