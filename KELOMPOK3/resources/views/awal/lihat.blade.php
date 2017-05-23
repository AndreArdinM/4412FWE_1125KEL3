@extends('masterr')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('teller')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data teller</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{$teller->nama}}</td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>{{$teller->alamat}}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{$teller->jeniskelamin}}</td>
		</tr>
		<tr>
			<td>Pengguna</td>
			<td>:</td>
			<td>{{$teller->pengguna->username}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{$teller->pengguna->password}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$teller->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$teller->update_at}}</td>
		</tr>
	</table>
</div>
@stop