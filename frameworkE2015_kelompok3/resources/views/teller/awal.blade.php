@extends('masterr')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Teller</strong>
			<a href="{{ url('teller/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> teller</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuateller as $teller)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $teller->nama or 'Nama kosong'}}</td>
									<td>{{ $teller->alamat or 'alamat kosong'}}</td>
									<td>{{ $teller->jeniskelamin or 'jeniskelamin kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('teller/edit/'.$teller->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('teller/'.$teller->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('teller/hapus/'.$teller->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop