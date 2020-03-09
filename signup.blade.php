<!--Nilam Rana-->
<!--CS 491-->


<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>Hello, world!</title>
	</head>
	<body>
		<h1></h1>
		<!-- Sign up Page start-->
		<div class="container">
			<div class="col col-lg-8">
						<!-- Default form register -->
			<form class="text-center border border-light p-5" action="{{ url('/signup') }}" method="POST">

				{{ csrf_field() }}
				<p class="h4 mb-4">Sign up</p>
				<div class="form-row mb-4">
					<div class="col">
						<!-- First name -->
						<input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="fname">
					</div>
					<div class="col">
						<!-- Last name -->
						<input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lname">
					</div>
				</div>
				<!-- E-mail -->
				<input name = "email" type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">
				<!-- Password -->
				<input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password">
				<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
				At least 8 characters and 1 digit
				</small>
				<!-- Phone number -->
				<input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="phone">
				<small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
				Optional - for two step authentication
				</small>
				<!-- Newsletter -->
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
					<label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
				</div>
				<!-- Sign up button -->
				<button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>
				<!-- Social register -->
				<p>or sign up with:</p>
				<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
				<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
				<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
				<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>
				<hr>
				</form>
				<!-- Default form register -->				
			</div>
		</div>
			<!-- Sign up page end-->
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</body>
	</html>