@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			background-image:  url("../img/login.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
		}


		.container {
			max-width: 700px;
			padding:  0;
			display: flex;
			flex-wrap: wrap;
			height: 100vh;
		}

		.card {
			width: 500px;
			background-color: #fff;
			border-radius: 10px;
			padding: 50px;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
		}

		.card h1 {
			text-align: center;
			font-size: 36px;
			color: #444;
			margin-bottom: 40px;
			font-weight: bold;
		}

		.form-group {
			margin-bottom: 20px;
		}

		.form-label {
			font-size: 16px;
			font-weight: bold;
			color: #444;
			margin-bottom: 10px;
			display: block;
		}

		.form-control {
			border: none;
			border-radius: 5px;
			background-color: #f5f5f5;
			padding: 10px 15px;
			width: 100%;
			font-size: 16px;
			color: #444;
			margin-bottom: 5px;
		}

		.form-control:focus {
			outline: none;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}

		.btn {
			background-color: #444;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: background-color 0.3s ease;
			width: 100%;
			margin-top: 20px;
		}

		.btn:hover {
			background-color: #333;
		}

		.remember-me {
			margin-bottom: 10px;
			display: flex;
			align-items: center;
		}

		.remember-me input[type="checkbox"] {
			margin-right: 10px;
		}

		.forgot-password {
			text-align: right;
			margin-top: 10px;
		}

		.forgot-password a {
			color: #444;
			font-size: 14px;
			text-decoration: none;
		}

		.forgot-password a:hover {
			text-decoration: underline;
		}

		.create-account {
			text-align: center;
			margin-top: 20px;
		}

		.create-account a {
			color: #444;
			font-size: 14px;
			text-decoration: none;
		}

		.create-account a:hover {
			text-decoration: underline;
		}

		.error-message {
			color: red;
			font-size: 14px;
			margin-top: 5px;
			margin-left: 5px;
			display: block;
		}
	</style>
</head>
<body>
<div style="background-image: url('../img/login.jpg'); background-size: cover; background-position: center; min-height: 100vh;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card card-body mt-5">
					<h2 class="text-center mb-3"><i class="fas fa-user"></i> Login</h2>
					<form method="POST" action="{{ route('login') }}">
						@csrf

						<div class="form-group">
							<label for="email">Email Address</label>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							@error('email')
		                        <span class="invalid-feedback" role="alert">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							@error('password')
		                        <span class="invalid-feedback" role="alert">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
						</div>

						<div class="form-group">
							<label for="user_type">Login as</label>
							<select id="user_type" name="user_type" class="form-control" required>
								<option value="jobseeker">Job Seeker</option>
								<option value="employer">Employer</option>
							</select>
						</div>

						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="form-check-label" for="remember">Remember Me</label>
						</div>

						<button type="submit" class="btn btn-primary btn-block">Login</button>

						@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
						<br>
						<br>
						<div class="text-center">
							<p>Don't have an account yet?</p>
						<p>Be a Job Seeker <a href="{{ route('register.jobseeker') }}">Register here</a></p>
						<p>Be an Employer <a href="{{ route('register') }}">Register here</a></p>
            </div>
					

					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
@endsection
