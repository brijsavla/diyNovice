<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>	Login</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="{{asset('login.css')}}"></script>
		<!------ Include the above in your HEAD tag ---------->
	</head>
	<body>
		<div>
			<h1>Login</h1>
		</div>
		<div id="login">
			<h3 class="text-center text-white pt-5">login form</h3>
			<div class="container">
				<div id="login-row" class="row justify-content-center align-items-center">
					<div id="login-column" class="col-md-6">
						<div id="login-box" class="col-md-12">
							<form id="login-form" class="form" action="{{ url('/login') }}" method="post">
								{{ csrf_field() }}
								<h3 class="text-center text-info">Login</h3>
								<div class="form-group">
									<label for="username" class="text-info">Email *</label><br>
									<input type="text" name="email" id="email" class="form-control">
								</div>
								<div class="form-group">
									<label for="password" class="text-info">Password *</label><br>
									<input type="text" name="password" id="password" class="form-control">
								</div>
								<div class="form-group">
									<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
									<input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
								</div>
								<div id="register-link" class="text-right">
									<a href="#" class="text-info">Register here</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
@endsection