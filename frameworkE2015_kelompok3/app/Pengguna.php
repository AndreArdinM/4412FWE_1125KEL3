<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;



class Pengguna extends Model implements AuthenticatableContract

{
	use Authenticatable;
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];

    public function teller()
    {
    	return $this->hasOne(teller::class);
    }
}
