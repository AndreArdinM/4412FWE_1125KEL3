<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\manajerRequest;

use App\manajer;
use App\kantorcabang;


class manajerController extends Controller
{
    protected $guarded =['id'];
   
   protected $informasi = 'Gagal melakukan aksi';
  
   public function awal()
   {
    $semuamanajer = manajer::all();
      return view('manajer.awal', compact('semuamanajer'));
   }
   public function tambah()
   {
      $manajer = new manajer;
      $kantorcabang = new kantorcabang;
    return view('manajer.tambah', compact('kantorcabang'));
   }
   public function simpan(manajerRequest $input)
   {
      $manajer = new manajer;
      $manajer->nama = $input->nama;
      $manajer->alamat = $input->alamat;
      $manajer->jenis_kelamin = $input->jenis_kelamin;
      $manajer->kantorcabang_id = $input->kantorcabang_id;
    //$manajer = new manajer($input->only('nama','alamat','jenis_kelamin','kantorcabang_id'));
    if($manajer->save()) $this->informasi = "manajer berhasil disimpan ";
      return redirect('manajer')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $manajer = manajer::find($id);
      return view('manajer.lihat')->with(array('manajer'=>$manajer));
   }
   public function edit($id)
   {
      $manajer = manajer::find($id);
	  $kantorcabang = new kantorcabang;
      return view('manajer.edit',compact('manajer','kantorcabang'));
   }
   public function update($id,manajerRequest $input)
   {
      $manajer = manajer::find($id);
      $manajer->fill($input->only('nama','alamat','jenis_kelamin','kantorcabang_id'));
      if($manajer->save()) $this->informasi = "Kategori berhasil diperbarui";
      return redirect('manajer')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,manajerRequest $input)
   {
      $manajer = manajer::find($id);
      if($manajer->delete()) $this->informasi = "manajer berhasil dihapus ";
      return redirect('manajer')->with(['informasi' => $this->informasi]);
   }
}
