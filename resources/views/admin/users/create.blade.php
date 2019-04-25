@extends('layouts.admin')

@section('content')

	<h1><i>Create Users</i></h1>

	<form action="AdminUsersController@store" method="POST">
		<div class="panel-body">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name</label>

				<div class="input-group col-sm-10"> 
                  <input type="password" class="form-control" id="name" placeholder="Name" required>
			  	</div>
			</div>	
			<div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

	            <div class="input-group col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                </div>
            </div>
			<div class="form-group">
				<button class="btn btn-success pull-right" type="submit">Create</button>
			</div>
		</div>
	</form>

	
@stop