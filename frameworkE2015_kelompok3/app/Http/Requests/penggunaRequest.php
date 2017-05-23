<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests;

class penggunaRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$validasi=['username'=>'required','password'=>'required'];
		if($this->is('pengguna/tambah')){
			
		}
		return $validasi;
	}
}