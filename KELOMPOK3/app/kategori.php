<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
	protected $table = 'kategori';
    protected $fillable = ['nama_kategori','fitur_id'];
    protected $guarded = ['id'];

    // public function fitur()
    // {
    // 	return $this->hasOne(fitur::class);
    // }

    public function fitur()
    {
      return $this->belongsTo(fitur::class);
    }
    
    // public function nasabah(){
    // 	return $this->belongsTo(nasabah::class);
    // }

    public function nasabah()
    {
        return $this->hasOne(nasabah::class);
    }

    public function paket()
    {
        return $this->hasMany(paket::class);
    }

     public function listkategori()
    {
      $out=[];
       foreach ($this ->all() as $kategori) {
           $out[$kategori->id]="{$kategori->nama_kategori}";
       }
       return $out;
    }
}
