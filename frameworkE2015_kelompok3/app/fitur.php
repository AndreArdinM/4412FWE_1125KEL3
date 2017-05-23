<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fitur extends Model
{
    protected $table = 'fitur';
    protected $fillable = ['jenis','deskripsi'];
    protected $guarded = ['id'];

    // public function fitur(){
    // 	return $this->belongsTo(fitur::class);
    // }

    public function fitur(){
      return $this->HashOne(fitur::class);
    }



     public function paket()
    {
        return $this->hasMany(paket::class);
    }

    // public function listfitur()
    // {
    //   $out=[];
    //    foreach ($this ->all() as $fitur) {
    //        $out[$fitur->id]="{$fitur->jenis}";
    //    }
    //    return $out;
    // }
   }
