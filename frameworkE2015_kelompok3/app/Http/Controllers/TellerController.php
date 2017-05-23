<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pengguna;
use App\teller;
use Input;
use Redirect;
use informasi;
//use App\Http\Request\tellerRequest;

class TellerController extends Controller
{

	protected $informasi = 'gagal melakukan aksi';
    public function awal(){
        $semuateller = teller::all();
        return view('teller.awal', compact('semuateller'));
    }
    public function tambah(){
        return view('teller.tambah');
    }
    public function simpan(Request $input){
          $this->validate($input,['username'=>'required','password'=>'required',]);
        $pengguna = new pengguna($input->only('username','password'));
        if ($pengguna->save()){
        $teller = new teller;
        $teller->nama=$input->nama;
        $teller->alamat=$input->alamat;
        $teller->jeniskelamin=$input->jeniskelamin;
        $teller->pengguna_id=$input->pengguna_id;
                if ($pengguna->teller()->save($teller)) $this->informasi = 'berhasil simpan data'; 
    } return redirect('teller')->with(['informasi' => $this->informasi]);}

    public function edit($id){
        $teller=teller::find($id);
        return view('teller.edit')->with(array('teller'=>$teller));
    }
public function lihat($id){
        $teller=teller::find($id);
        return view('teller.lihat')->with(array('teller'=>$teller));
    }

    public function update($id,Request $input){
        $teller = teller::find($id);
        $pengguna = $teller->pengguna;
        $teller ->nama=$input->nama;
        $teller ->alamat=$input->alamat;
        $teller ->jeniskelamin=$input->jeniskelamin;
        $teller->save();
                if(!is_null($input->username)){
            $pengguna->fill($input->only('username'));
            if (!empty($input->password)){
                $pengguna->password=$input->password;
            }
            if ($pengguna->save()) $this->informasi='berhasil simpan';
            } 
            else{
                 $this->informasi = 'gagal simpan';
            }
            return redirect('teller')->with(['informasi=>$this->informasi']);}
        /*if ($teller->save()){
            $pengguna = new pengguna($input->only('username'));
            if(!is_null($input->password))$pengguna->password= $input->password;
            if ($teller->pengguna()->save($pengguna)) $this->informasi = 'berhasil simpan data';}
            return redirect('teller/awal')->with(['informasi'=>$this->informasi]);
                   }*/
    public function hapus($id){
        $teller = teller::find($id);
        if ($teller->pengguna()->delete()){
            if ($teller->delete()) $this->informasi = 'berhasil hapus';
        } return redirect('teller')->with(['informasi'=> $this->informasi]);
    }
}