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

<div class="form-group {{ $errors->has('jeniskelamin') ? ' has-error' : '' }}">
<label class="col-md-2 control-label">Jenis Kelamin</label>
	<div class="col-md-10">
		<select name="jeniskelamin" class="form-control">
			<option value="Pria">Pria</option>
			<option value="Wanita">Wanita</option>
		</select>
	</div>
</div>   

<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',null,['class'=>'form-control','placeholder'=>"Password"]) !!}	
	</div>
</div>

<div class="form-group {{ $errors->has('level') ? ' has-error' : '' }}">
<label class="col-md-2 control-label">Level</label>
	<div class="col-md-10">
		<select name="level" class="form-control">
			<option value="Teller">Teller</option>
			
		</select>
	</div>
</div>   