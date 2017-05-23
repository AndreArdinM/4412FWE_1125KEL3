<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests;

class nasabahRequest extends Request
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
        'jenis_kelamin'=>'required',
        'tabungan'=>'required',
        'nomor_induk'=>'required',
        'status'=>'required',
        'kewarganegaraan'=>'required',
        'teller_id'=>'required',
        'kategori_id'=>'required',
        'kantorcabang_id'=>'required'
        ];
		if($this->is('nasabah/tambah')){

		}
		return $validasi;
	}
}