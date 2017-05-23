<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\kategoriRequest;
use App\kategori;
use App\fitur;

class kategoriController extends Controller
{
protected $guarded =['id'];
   
   protected $informasi = 'Gagal melakukan aksi';
  
   public function awal()
   {
    $semuakategori = kategori::all();
      return view('kategori.awal', compact('semuakategori'));
   }
   public function tambah()
   {
      $kategori = new kategori;
      $fitur = new fitur;
    return view('kategori.tambah', compact('kategori','fitur'));
   }
   public function simpan(kategoriRequest $input)
   {
    $kategori = new kategori($input->only('nama_kategori','fitur_id'));
    if($kategori->save()) $this->informasi = "Kategori berhasil disimpan ";
      return redirect('kategori')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id_kategori)
   {
      $kategori = kategori::find($id_kategori);
      return view('kategori.lihat',compact('kategori'));
   }
   public function edit($id_kategori)
   {
      $kategori = kategori::find($id_kategori);
	  $fitur = new fitur;
      return view('kategori.edit',compact('kategori','fitur'));
   }
   public function update($id_kategori,kategoriRequest $input)
   {
      $kategori = kategori::find($id_kategori);
      $kategori->fill($input->only('nama_kategori','fitur_id'));
      if($kategori->save()) $this->informasi = "Kategori berhasil diperbarui";
      return redirect('kategori')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id_kategori,Request $input)
   {
      $kategori = kategori::find($id_kategori);
      if($kategori->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus ";
      return redirect('kategori')->with(['informasi' => $this->informasi]);
   }
}
