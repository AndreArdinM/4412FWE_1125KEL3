@extends('masterr')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Paket</strong>
			<a href="{{ url('paket/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Paket</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Kategori</th>
									<th>Fitur</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuapaket as $paket)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $paket->kategori->nama_kategori or 'kategori kosong'}}</td>
									<td>{{ $paket->fitur->jenis or 'deskripsi kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('paket/edit/'.$paket->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('paket/'.$paket->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('paket/hapus/'.$paket->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop