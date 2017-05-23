@extends('masterr')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Teller</strong>
			<a href="{{ url('fitur/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> fitur</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>jenis</th>
									<th>Deskripsi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($data as $fitur)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $fitur->jenis or 'jenis kosong'}}</td>
									<td>{{ $fitur->Deskripsi or 'deskripsi kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('fitur/edit/'.$fitur->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('fitur/'.$fitur->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('fitur/hapus/'.$fitur->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop