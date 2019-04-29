@extends('layouts.admin')

@section('content')

	<h1><i>Create Users</i></h1>

	<form action="/admin/users" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="panel-body">
			<div class="form-group">
				<label for="name">Name : </label>
                  <input name="name" type="text" class="form-control" placeholder="Name" >
			</div>	
			<div class="form-group">
                  <label for="email" class="control-label">Email : </label>
                  <input name="email" type="email" class="form-control" placeholder="Email" >
            </div>
            <div class="form-group">
		  		<label for="role_id">Role : </label>
			      <select name="role_id" type="text" class="form-control" >
			      	<option value selected="selected">Choose Options</option>
			      	@foreach($roles as $role)
			      	<option value="{{$role->id}}">{{$role->name}}</option>
			      	@endforeach
			      </select>
		  	</div>
		  	<div class="form-group">
		  		<label for="is_active">Status : </label>
			      <select name="is_active" type="text" class="form-control" >
			      	<option value="0">Not Active</option>
			      	<option value="1">Active</option>
			      </select>
		  	</div>
            <div class="form-group">
                  <label for="photo_id">Photo : </label>
                  <input name="photo_id" type="file" class="form-control" >
            </div>
		  	<div class="form-group"> 
                  <label for="password" class="control-label">Password : </label>
                  <input name="password" type="password" class="form-control" placeholder="Password" >
            </div>
			<div class="form-group">
				<button class="btn btn-primary pull-right" type="submit">Create User</button>
			</div>

		</div>
	</form>


 @include('includes.form_error') 
	
@stop