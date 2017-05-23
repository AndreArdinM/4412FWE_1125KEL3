<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\kantorcabangRequest;
use App\kantorcabang;

class KantorCabangController extends Controller
{
 public function awal()
    {
    	return view('kantorcabang.awal',['data'=>kantorcabang::all()]);
    }
    public function tambah()
    {
    	return view('kantorcabang.tambah');
    }
    public function simpan(kantorcabangRequest $input)
    {   
        // $this->validate($input,[
        //     'nama_kantor'=>'required','max=12',
        //     'password'=>'required']);
        
    	$kantorcabang = new kantorcabang();
    	$kantorcabang->nama_kantor = $input->nama_kantor;    
    	$kantorcabang->alamat = $input->alamat;	
    	$informasi = $kantorcabang ->save()?'Berhas
        il Simpan Data' : 'Gagal Simpan Data';
        return redirect('kantorcabang')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $kantorcabang= kantorcabang::find($id);
        return view('kantorcabang.edit')->with(array('kantorcabang'=>$kantorcabang));
    }
     public function lihat($id)
    {
        $kantorcabang= kantorcabang::find($id);
        return view('kantorcabang.lihat')->with(array('kantorcabang'=>$kantorcabang));
    }
     public function update($id,kantorcabangRequest $input)
    {
        $kantorcabang= kantorcabang::find($id);
        $kantorcabang->nama_kantor = $input->nama_kantor;$kantorcabang->alamat = $input->alamat;        
        $informasi= $kantorcabang->save()? 'Berhasil update data': 'Gagal update data';
        return redirect('kantorcabang')->with(['informasi'=>$informasi]);
    }
     public function hapus($id)
    {
        $kantorcabang=kantorcabang::find($id);
        $informasi=$kantorcabang->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('kantorcabang')->with(['informasi'=>$informasi]);
    }
}