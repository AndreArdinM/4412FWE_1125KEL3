<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!!Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"])!!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">alamat</label>
	<div class="col-sm-10">
		{!!Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"alamat"])!!}
	</div>
</div>

<div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
<label class="col-md-2 control-label">Jenis Kelamin</label>
	<div class="col-md-10">
		<select name="jenis_kelamin" class="form-control">
			<option value="Pria">Pria</option>
			<option value="Wanita">Wanita</option>
		</select>
	</div>
</div>   

<div class="form-group">
		<label class="col-sm-2 control-label" id="kantorcabang_id">kantor cabang</label>
		<div class="col-sm-10">
			{!! Form::select('kantorcabang_id',$kantorcabang->lists('nama_kantor','id'),null,['class'=>'form-control','id'=>'kantorcabang_id','placeholder'=>"jenis kantor"]) !!}
		</div>
</div>

