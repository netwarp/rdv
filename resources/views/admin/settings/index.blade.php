@extends('admin._layout')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ action('Admin\AdminController@getIndex') }}">Home</a></li>
                <li class="active">Settings</li>
            </ol>
        </div>
    </div>
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
    <div class="row">
    	<div class="col-md-6">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				Password
    			</div>
    			<div class="panel-body">
    				<form action="{{ action('Admin\SettingsController@postSettings') }}" method="POST">
    					@csrf

    					<input type="hidden" name="setting" value="password">

    					<div class="form-group">
    						<label for="old_password">Old password</label>
    						<input type="password" class="form-control" name="old_password">
    					</div>

    					<div class="form-group">
    						<label for="password">New password</label>
    						<input type="password" class="form-control" name="password">
    					</div>

    					<div class="form-group">
    						<label for="password">Confirmation</label>
    						<input type="password" class="form-control" name="confirmation">
    					</div>

    					<div class="form-group">
    						<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-6">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					Email
    				</div>
    				<div class="panel-body">
    					<form action="{{ action('Admin\SettingsController@postSettings') }}" method="POST">
	    					@csrf

	    					<input type="hidden" name="setting" value="email">

	    					<div class="form-group">
	    						<label for="old_email">Old email</label>
	    						<input type="email" class="form-control" name="old_email">
	    					</div>

	    					<div class="form-group">
	    						<label for="password">New email</label>
	    						<input type="email" class="form-control" name="email">
	    					</div>

	    					<div class="form-group">
	    						<label for="confirmation">Confirmation</label>
	    						<input type="email" class="form-control" name="confirmation">
	    					</div>

	    					<div class="form-group">
	    						<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
	    					</div>
	    				</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
@endsection