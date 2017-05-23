<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\nasabah;
use App\Http\Requests\nasabahRequest;
use App\kantorcabang;
use App\teller;
use App\kategori;
use Input;
use Redirect;
use informasi;

class nasabahController extends Controller
{
   //protected $guarded =['id'];
   
   protected $informasi = 'Gagal melakukan aksi';
  
   public function awal()
   {
    $semuanasabah = nasabah::all();
      return view('nasabah.awal', compact('semuanasabah'));
   }
   public function tambah()
   {
      $nasabah = new nasabah;
      $teller = new teller;
      $kategori = new kategori;
      $kantorcabang = new kantorcabang;
    return view('nasabah.tambah', compact('nasabah','teller','kategori','kantorcabang'));
   }
   public function simpan(nasabahRequest $input)
   {
    $nasabah = new nasabah($input->only('nama','alamat','jenis_kelamin','tabungan','nomor_induk','status','kewarganegaraan','teller_id','kategori_id','kantorcabang_id'));
    if($nasabah->save())
     $this->informasi = "nasabah berhasil disimpan ";
      return redirect('nasabah')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $nasabah = nasabah::find($id);
      return view('nasabah.lihat',compact('nasabah'));
   }
   public function edit($id)
   {
      $nasabah = nasabah::find($id);
	  $teller = new teller;
      $kategori = new kategori;
      $kantorcabang = new kantorcabang;      
      return view('nasabah.edit',compact('nasabah','teller','kategori','kantorcabang'));
   }
   public function update($id, nasabahRequest $input)
   {
      $nasabah = nasabah::find($id);
      $nasabah->fill($input->only('nama','alamat','jenis_kelamin','tabungan','nomor_induk','status','kewarganegaraan','teller_id','kategori_id','kantorcabang_id'));
      if($nasabah->save()) $this->informasi = "Kategori berhasil diperbarui";
      return redirect('nasabah')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,nasabahRequest $input)
   {
      $nasabah = nasabah::find($id);
      if($nasabah->delete()) $this->informasi = "Nasabah Berhasil Dihapus ";
      return redirect('nasabah')->with(['informasi' => $this->informasi]);
   }
}
