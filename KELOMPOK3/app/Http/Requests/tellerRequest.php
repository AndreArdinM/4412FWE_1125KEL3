<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests;

class tellerRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		 $validasi = [
        'nama'=>'required',
        'alamat'=>'required',
        'jeniskelamin'=>'required',
        'pengguna_id'=>'required',
        'username'=>'required',
        'level'=>'required'
        ];

        if ($this->is('teller/tambah')) {
        	$validasi['password'] = 'required';
        }
        return $validasi;
	}
}