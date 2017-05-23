@extends('masterr')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('kategori')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data kategori</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Kategori</td>
			<td>:</td>
			<td>{{$kategori->nama_kategori}}</td>
		</tr>
		<tr>
			<td>Jenis Fitur</td>
			<td>:</td>
			<td>{{$kategori->fitur->jenis}}</td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td>{{$kategori->fitur->Deskripsi}}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kategori->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kategori->update_at}}</td>
		</tr>
	</table>
</div>
@stop