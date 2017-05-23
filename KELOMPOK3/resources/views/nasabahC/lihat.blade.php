@extends('berandateller')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('nasabahC')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data nasabah</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$nasabah->nama}}</td>
		</tr>
				<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$nasabah->alamat}}</td>
		</tr>
		<tr>
			<td>jenis kelamin</td>
			<td>:</td>
			<td>{{$nasabah->jenis_kelamin}}</td>
		</tr>
		<tr>
			<td>tabungan</td>
			<td>:</td>
			<td>{{$nasabah->tabungan}}</td>
		</tr>
		<tr>
			<td>nomor induk</td>
			<td>:</td>
			<td>{{$nasabah->nomor_induk}}</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>{{$nasabah->status}}</td>
		</tr>
		<tr>
			<td>Kewarganegaraan</td>
			<td>:</td>
			<td>{{$nasabah->kewarganegaraan}}</td>
		</tr>
		<tr>
			<td>Teller</td>
			<td>:</td>
			<td>{{$nasabah->teller->nama}}</td>
		</tr>
		<tr>
			<td>kategori</td>
			<td>:</td>
			<td>{{$nasabah->kategori->nama_kategori}}</td>
		</tr>
		<tr>
			<td>Kantor cabang</td>
			<td>:</td>
			<td>{{$nasabah->kantorcabang->nama_kantor}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$nasabah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$nasabah->update_at}}</td>
		</tr>
	</table>
</div>
@stop