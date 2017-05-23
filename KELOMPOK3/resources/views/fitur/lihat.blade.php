@extends('masterr')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('fitur')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data fitur</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Fitur</td>
			<td>:</td>
			<td>{{$fitur->jenis}}</td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td>{{$fitur->Deskripsi}}</td>
		</tr>		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$fitur->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$fitur->update_at}}</td>
		</tr>
	</table>
</div>
@stop