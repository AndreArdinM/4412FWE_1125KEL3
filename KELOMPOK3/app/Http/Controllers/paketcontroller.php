<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\paketRequest;
use App\paket;
use App\kategori;
use App\fitur;

class paketcontroller extends Controller
{
    protected $guarded =['id'];
   
   protected $informasi = 'Gagal melakukan aksi';
  
   public function awal()
   {
    $semuapaket = paket::all();
      return view('paket.awal', compact('semuapaket'));
   }
   public function tambah()
   {
      $kategori = new kategori;
      $fitur = new fitur;
    return view('paket.tambah', compact('kategori','fitur'));
   }
   public function simpan(paketRequest $input)
   {
    $paket = new paket($input->only('id_kategori','id_fitur'));
    if($paket->save()) $this->informasi = "Data kategori berhasil disimpan ";
      return redirect('paket')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $paket = paket::find($id);
      return view('paket.lihat',compact('paket'));
   }
   public function edit($id)
   {
      $paket = paket::find($id);
      $kategori = new kategori;
      $fitur = new fitur;
      return view('paket.edit',compact('kategori','fitur','paket'));
   }
   public function update($id,paketRequest $input)
   {
      $paket = paket::find($id);
      $paket->fill($input->only('id_kategori','id_fitur'));
      if($paket->save()) $this->informasi = "Data berhasil diperbarui";
      return redirect('paket')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,Request $input)
   {
      $paket = paket::find($id);
      if($paket->delete()) $this->informasi = "Data berhasil dihapus ";
      return redirect('paket')->with(['informasi' => $this->informasi]);
   }
}