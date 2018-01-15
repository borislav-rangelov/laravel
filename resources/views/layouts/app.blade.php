<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Homepage - Bookstore</title>

	<link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.css">
	<link rel="stylesheet" href="/css/app.css">
</head>

<body>
	@include('layouts.navbar')

	<main role="main" class="container-fluid">
		@yield('above-body')

		<div class="row row-offcanvas row-offcanvas-left">
			<!-- sidebar -->
			<div class="col-6 col-md-3 sidebar-offcanvas">
				<div class="list-group">
					<a href="#" class="list-group-item">Classics</a>
					<a href="#" class="list-group-item">Contemporary</a>
					<a href="#" class="list-group-item">Crime</a>
					<a href="#" class="list-group-item">Dystopian</a>
					<a href="#" class="list-group-item">Fantasy</a>
					<a href="#" class="list-group-item">Fiction</a>
					<a href="#" class="list-group-item">Horror</a>
					<a href="#" class="list-group-item">Romance</a>
					<a href="#" class="list-group-item">Science Fiction</a>
					<a href="#" class="list-group-item">Young Adult</a>
				</div>
			</div>
			<!-- main content -->
			<div class="col-12 col-md-9">
				@yield('content')
			</div>

			<!-- bellow-body -->

		</div>
	</main>

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<span class="text-muted">Footer</span>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
	 crossorigin="anonymous"></script>
</body>

</html>