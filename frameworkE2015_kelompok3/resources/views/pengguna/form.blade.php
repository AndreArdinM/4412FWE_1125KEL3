<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"> Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
	</div>
</div>
<div class="form-group {{ $errors->has('level') ? ' has-error' : '' }}">
<label class="col-md-2 control-label">Level</label>
	<div class="col-md-8">
		<select name="level" class="form-control">
			<option value="Teller">Teller</option>
			<option value="Nasabah">Nasabah</option>
		</select>
	</div>
</div>   