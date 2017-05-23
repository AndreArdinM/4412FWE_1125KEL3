<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class manajerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $validasi = [
        'nama'=>'required',
        'alamat'=>'required',
        'jenis_kelamin'=>'required',
        'kantorcabang_id'=>'required'
        ];

        if ($this->is('manajer/tambah')) {
        }
        return $validasi;
    }
}
