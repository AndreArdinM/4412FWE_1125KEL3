<div class="form-group">
	<label class="col-sm-2 control-label">Nama kategori</label>
	<div class="col-sm-10">
		{!!Form::text('nama_kategori',null,['class'=>'form-control','placeholder'=>"Nama_kategori"])!!}
	</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label" id="matakuliah_id"> Jenis Fitur</label>
		<div class="col-sm-10">
			{!! Form::select('fitur_id',$fitur->lists('jenis', 'id'),null,['class'=>'form-control','jenis'=>'fitur_id','placeholder'=>"Jenis Fitur"]) !!}
		</div>
</div>