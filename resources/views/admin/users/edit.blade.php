@extends('layouts.admin')



@section('content')


<h1>Edit Users</h1>

<div class="row">
	<div class="col-md-3">
		<img src="{{$user->photo ? $user->photo->file : 'https://via.placeholder.com/140x100'}}" class="img-responsive img-rounded">
	</div>

	<div class="col-md-9">
		{!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

		<div class="form-group">
			{!! Form::label('name','Name:') !!}
			{!! Form::text('name',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Email:') !!}
			{!! Form::text('email',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('role_id','Role:') !!}
			{!! Form::select('role_id',[''=>'Choose Options'] + $roles,null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('is_active','Status:') !!}
			{!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('photo_id','File:') !!}
			{!! Form::file('photo_id',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Password:') !!}
			{!! Form::password('password',['class'=>'form-control']) !!}
		</div>



		<div class="form-group">
			{!! Form::submit('Edit User',['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>
</div>
<div class="row"> 
	<div class="col-md-3"></div>
	<div class="col-md-9">
		@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>
@stop

