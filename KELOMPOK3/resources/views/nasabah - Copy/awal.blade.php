@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data nasabah</strong>
			<a href="{{ url('nasabah/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> nasabah</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama</th>	
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
									<th>Tabungan</th>
									<th>Nomor Induk</th>
									<th>Status</th>
									<th>Kewarganegaraan</th>
									<th>Teller</th>
									<th>Kategori</th>
									<th>Kantor Cabang</th>		
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuanasabah as $nasabah)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $nasabah->nama or 'kosong'}}</td>
									<td>{{ $nasabah->alamat or 'kosong'}}</td>
									<td>{{ $nasabah->jenis_kelamin or 'kosong'}}</td>
									<td>{{ $nasabah->tabungan or 'kosong'}}</td>
									<td>{{ $nasabah->nomor_induk or 'kosong'}}</td>							
									<td>{{ $nasabah->status or 'kosong'}}</td>
									<td>{{ $nasabah->kewarganegaraan or 'kosong'}}</td>
									<td>{{ $nasabah->teller_id or 'kosong'}}</td>
									<td>{{ $nasabah->kategori_id or 'kosong'}}</td>
									<td>{{ $nasabah->kantorcabang_id or 'kosong'}}</td>
									
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('nasabah/edit/'.$nasabah->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('nasabah/'.$nasabah->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('nasabah/hapus/'.$nasabah->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop