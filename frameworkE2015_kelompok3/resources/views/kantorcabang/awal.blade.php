@extends('masterr')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data kantorcabang</strong>
			<a href="{{ url('kantorcabang/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> kantorcabang</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama Cabang</th>	
									<th>Alamat</th>		
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($data as $kantorcabang)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $kantorcabang->nama_kantor or 'kosong'}}</td>
									<td>{{ $kantorcabang->alamat or 'kosong'}}</td>							

									<td>
										<div class="btn-group" role="group">
											<a href="{{url('kantorcabang/edit/'.$kantorcabang->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('kantorcabang/'.$kantorcabang->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('kantorcabang/hapus/'.$kantorcabang->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop