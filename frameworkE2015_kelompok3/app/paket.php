<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
  protected $table = 'paket';
   protected $fillable = ['id','id_fitur','id_kategori',];
  protected $guarded= ['id'];

  public function kategori()
    {
    	return $this ->belongsTo(kategori::class, 'id_kategori');
    }

    public function fitur()
    {
    	return $this ->belongsTo(fitur::class, 'id_fitur');
    }

    public function listkategori()
    {
      $out=[];
       foreach ($this ->all() as $kategori) {
           $out[$kategori->id_kategori]="{$kategori->nama_kategori}";
       }
       return $out;
    }

     public function listfitur()
    {
      $out=[];
       foreach ($this ->all() as $fitur) {
           $out[$fitur->id_fitur]="{$fitur->jenis}";
       }
       return $out;
    }
}
