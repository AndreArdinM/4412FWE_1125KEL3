@extends('masterr')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('kantorcabang')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data kantorcabang</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Kantor</td>
			<td>:</td>
			<td>{{$kantorcabang->nama_kantor}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$kantorcabang->alamat}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kantorcabang->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$kantorcabang->update_at}}</td>
		</tr>
	</table>
</div>
@stop