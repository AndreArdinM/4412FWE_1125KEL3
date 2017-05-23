@extends('masterr')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data manajer</strong>
			<a href="{{ url('manajer/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> manajer</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama Manajer</th>	
									<th>Alamat</th>
									<th>jenis kelamin</th>
									<th>aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuamanajer as $manajer)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $manajer->nama or 'kosong'}}</td>
									<td>{{ $manajer->alamat or 'kosong'}}</td>
									<td>{{ $manajer->jenis_kelamin or 'kosong'}}</td>
									<td>{{ $manajer->kantorcabang->nama_kantor or 'kosong'}}</td>							

									<td>
										<div class="btn-group" role="group">
											<a href="{{url('manajer/edit/'.$manajer->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('manajer/'.$manajer->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('manajer/hapus/'.$manajer->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop