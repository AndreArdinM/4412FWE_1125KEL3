<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class paketRequest extends Request
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
        'id_kategori'=>'required',
        'id_fitur'=>'required'
        ];

        if ($this->is('paket/tambah')) {
        }
        return $validasi;
    }
}
