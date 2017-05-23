<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!!Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!!Form::text('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"])!!}
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
	<label class="col-sm-2 control-label">Tabungan</label>
	<div class="col-sm-10">
		{!!Form::text('tabungan',null,['class'=>'form-control','placeholder'=>"Tabungan"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nomor Induk</label>
	<div class="col-sm-10">
		{!!Form::text('nomor_induk',null,['class'=>'form-control','placeholder'=>"nomor induk"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Status</label>
	<div class="col-sm-10">
		<select name="status" class="form-control">
			<option value="Single">Single</option>
			<option value="Menikah">Menikah</option>
			<option value="Duda">Duda</option>
			<option value="Janda">Janda</option>
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Kewarganegaraan</label>
	<div class="col-sm-10">
	<select name="kewarganegaraan" class="form-control">
			<option value="WNA">WNA</option>
			<option value="WNI">WNI</option>
	</select>
		
	</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label" id="teller_id">Teller</label>
		<div class="col-sm-10">
			{!! Form::select('teller_id',$teller->lists('nama', 'id'),null,['class'=>'form-control','id'=>'nama','placeholder'=>"Teller"]) !!}
		</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label" id="kategori_id">Kategori</label>
		<div class="col-sm-10">
			{!! Form::select('kategori_id',$kategori->lists('nama_kategori', 'id'),null,['class'=>'form-control','id'=>'kategori_id','placeholder'=>"Jenis Kategori"]) !!}
		</div>
</div>
<div class="form-group">
		<label class="col-sm-2 control-label" id="kantorcabang_id">Kantor Cabang</label>
		<div class="col-sm-10">
			{!! Form::select('kantorcabang_id',$kantorcabang->lists('nama_kantor', 'id'),null,['class'=>'form-control','id'=>'kantorcabang_id','placeholder'=>"Kantor cabang"]) !!}
		</div>
</div>