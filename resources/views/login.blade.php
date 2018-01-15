@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col col-lg-6">
			<h3>Login</h3>
			<hr>
			<form action="{{ route('login_confirm') }}" method="post">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control {{ errorClass($errors->has('email')) }}" name="email" id="email" placeholder="Email">
					<div class="invalid-feedback">{{$errors->first('email')}}</div>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control {{ errorClass($errors->has('password')) }}" name="password" id="password" placeholder="Password">
					<div class="invalid-feedback">{{$errors->first('password')}}</div>
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</div>
	</div>
</div>
@endsection