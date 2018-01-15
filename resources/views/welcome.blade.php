@extends('layouts.app') 

@section('above-body')
<!-- above-body -->
<div class="row">
	<div class="col-lg-12">
		<div class="jumbotron">
			<h1 class="display-3">Welcome to Bookstore!</h1>
			<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<hr class="my-4">
			<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
			</p>
		</div>
	</div>
</div>
@endsection 

@section('content')
<h3>Featured</h3>
<hr>
<div class="card-deck">
	<div class="card">
		<img src="http://via.placeholder.com/277x415" alt="Card 1" class="card-img-top">
		<div class="card-body">
			<h5 class="card-title">Book 1</h5>
			<p class="card-text">Some text</p>
		</div>
		<div class="card-footer">
			<small class="text-muted">Footer</small>
		</div>
	</div>
	<div class="card">
		<img src="http://via.placeholder.com/277x415" alt="Card 2" class="card-img-top">
		<div class="card-body">
			<h5 class="card-title">Book 2</h5>
			<p class="card-text">Some text</p>
		</div>
		<div class="card-footer">
			<small class="text-muted">Footer</small>
		</div>
	</div>
	<div class="card">
		<img src="http://via.placeholder.com/277x415" alt="Card 3" class="card-img-top">
		<div class="card-body">
			<h5 class="card-title">Book 3</h5>
			<p class="card-text">Some text</p>
		</div>
		<div class="card-footer">
			<small class="text-muted">Footer</small>
		</div>
	</div>
</div>
@endsection