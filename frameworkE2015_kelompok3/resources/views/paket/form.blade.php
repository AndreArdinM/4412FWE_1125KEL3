<div class="form-group">
		<label class="col-sm-2 control-label" id="id_kategori">Kategori</label>
		<div class="col-sm-10">
			{!! Form::select('id_kategori',$kategori->lists('nama_kategori','id'),null,['class'=>'form-control','id'=>'nama_kategori','placeholder'=>"Kategori"]) !!}
		</div>
</div>

<div class="form-group">
		<label class="col-sm-2 control-label" id="id_fitur">Fitur</label>
		<div class="col-sm-10">
			{!! Form::select('id_fitur',$fitur->lists('jenis','id'),null,['class'=>'form-control','id'=>'jenis','placeholder'=>"Fitur"]) !!}
		</div>
</div>