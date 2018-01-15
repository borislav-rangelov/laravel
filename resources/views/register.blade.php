@extends('layouts.app') @section('content')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col col-lg-6">
			<h3>Register</h3>
			<hr>
			<form action="#" method="post">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="repeatPassword">Repeat Password</label>
					<input type="password" class="form-control" name="repeatPassword" id="repeatPassword" placeholder="Repeat Password">
				</div>
				<button type="submit" class="btn btn-primary">Sign up</button>
			</form>
		</div>
	</div>
</div>
@endsection