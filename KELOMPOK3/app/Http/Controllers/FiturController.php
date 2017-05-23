<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Fitur;
use App\Http\Requests\fiturRequest;
class FiturController extends Controller
{
   public function awal()
    {
    	return view('fitur.awal',['data'=>fitur::all()]);
    }
    public function tambah()
    {
    	return view('fitur.tambah');
    }
    public function simpan(fiturRequest $input)
    {   
        // $this->validate($input,[
        //     'nama_kantor'=>'required','max=12',
        //     'password'=>'required']);
        
    	$fitur = new fitur();
    	$fitur->jenis = $input->jenis;    
    	$fitur->deskripsi = $input->deskripsi;	
    	$informasi = $fitur ->save()?'Berhasil Simpan Data' : 'Gagal Simpan Data';
        return redirect('fitur')->with(['informasi'=>$informasi]);
    }
    public function edit($id_fitur)
    {
        $fitur= fitur::find($id_fitur);
        return view('fitur.edit')->with(array('fitur'=>$fitur));
    }
     public function lihat($id_fitur)
    {
        $fitur= fitur::find($id_fitur);
        return view('fitur.lihat')->with(array('fitur'=>$fitur));
    }
     public function update($id_fitur,fiturRequest $input)
    {
        $fitur= fitur::find($id_fitur);
        $fitur->jenis = $input->jenis;$fitur->deskripsi = $input->deskripsi;        
        $informasi= $fitur->save()? 'Berhasil update data': 'Gagal update data';
        return redirect('fitur')->with(['informasi'=>$informasi]);
    }
     public function hapus($id_fitur)
    {
        $fitur=fitur::find($id_fitur);
        $informasi=$fitur->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('fitur')->with(['informasi'=>$informasi]);
    }
}
