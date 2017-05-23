<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\nasabah;
use App\kantorcabang;
use App\teller;
use App\kategori;


class nasabahControllerT extends Controller
{
   protected $guarded =['id'];
   
   protected $informasi = 'Gagal melakukan aksi';
  
   public function awal()
   {
    $semuanasabah = nasabah::all();
      return view('nasabahC.awal', compact('semuanasabah'));
   }
   public function tambah()
   {
      $nasabah = new nasabah;
      $teller = new teller;
      $kategori = new kategori;
      $kantorcabang = new kantorcabang;
    return view('nasabahC.tambah', compact('nasabah','teller','kategori','kantorcabang'));
   }
   public function simpan(Request $input)
   {
    $nasabah = new nasabah($input->only('nama','alamat','jenis_kelamin','tabungan','nomor_induk','status','kewarganegaraan','teller_id','kategori_id','kantorcabang_id'));
    if($nasabah->save()) $this->informasi = "nasabah berhasil disimpan ";
      return redirect('nasabahC')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $nasabah = nasabah::find($id);
      return view('nasabahC.lihat',compact('nasabah'));
   }
   public function edit($id)
   {
      $nasabah = nasabah::find($id);
	  $teller = new teller;
      $kategori = new kategori;
      $kantorcabang = new kantorcabang;      
      return view('nasabahC.edit',compact('nasabah','teller','kategori','kantorcabang'));
   }
   public function update($id,Request $input)
   {
      $nasabah = nasabah::find($id);
      $nasabah->fill($input->only('nama','alamat','jenis_kelamin','tabungan','nomor_induk','status','kewarganegaraan','teller_id','kategori_id','kantorcabang_id'));
      if($nasabah->save()) $this->informasi = "Kategori berhasil diperbarui";
      return redirect('nasabahC')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,Request $input)
   {
      $nasabah = nasabah::find($id);
      if($nasabah->delete()) $this->informasi = "Nasabah Berhasil Dihapus ";
      return redirect('nasabahC')->with(['informasi' => $this->informasi]);
   }
}
