@extends('masterr')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('paket')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data paket</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Fitur</td>
			<td>:</td>
			<td>{{$paket->kategori->nama_kategori}}</td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td>{{$paket->fitur->nama_fitur}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$paket->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$paket->update_at}}</td>
		</tr>
	</table>
</div>
@stop