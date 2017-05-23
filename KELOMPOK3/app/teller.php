<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class teller extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'teller';
    protected $guarded = ['id'];
    protected $fillable = ['username','password'];
    public function Pengguna(){
    	return $this->belongsTo(Pengguna::class);
    }

    //  public function nasabah(){
    // 	return $this->belongsTo(nasabah::class);
    // }

    public function nasabah(){
    	return $this->hasOne(nasabah::class);
    }
}
