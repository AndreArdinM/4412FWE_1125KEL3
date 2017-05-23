@extends('masterr')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('manajer')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data manajer</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Kategori</td>
			<td>:</td>
			<td>{{$manajer->nama}}</td>
		</tr>
		<tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$manajer->alamat}}</td>
		</tr>
		<tr>
			<td>jenis kelamin</td>
			<td>:</td>
			<td>{{$manajer->jenis_kelamin}}</td>
		</tr>
		<tr>
		<tr>
			<td>Kantor cabang</td>
			<td>:</td>
			<td>{{$manajer->kantorcabang->nama_kantor}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$manajer->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$manajer->update_at}}</td>
		</tr>
	</table>
</div>
@stop