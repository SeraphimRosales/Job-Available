@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Privacy Policy</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f5f5f5;
			color: #333;
			font-size: 16px;
			line-height: 1.5;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}

		h1 {
			margin: 20px 0;
			font-size: 24px;
		}

		h2 {
			margin: 20px 0 10px;
			font-size: 20px;
		}

		main {
			margin: 20px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		p {
			margin: 0 0 1em;
		}

		ul {
			margin: 0 0 1em;
			padding-left: 20px;
		}

		li {
			margin-bottom: 0.5em;
		}

		a {
			color: #333;
			text-decoration: underline;
		}

		a:hover {
			color: #666;
		}
	</style>
</head>
<body>
	<header>
		<h1>Privacy Policy</h1>
	</header>
	<main>
		<p>We take your privacy seriously. This policy describes what personal information we collect and how we use it.</p>
		<h2>Information we collect:</h2>
		<ul>
			<li>We collect personal information such as your name, email address, and phone number when you create an account with us or apply for a job through our website.</li>
			<li>We also collect non-personal information such as your IP address and browser type.</li>
		</ul>
		<h2>How we use your information:</h2>
		<ul>
			<li>We use your personal information to provide you with job opportunities and to communicate with you about our services.</li>
			<li>We may use non-personal information for analytics and to improve our website.</li>
		</ul>
		<h2>Sharing of information:</h2>
		<ul>
			<li>We do not share your personal information with third parties without your consent, except when required by law or to protect our rights.</li>
		</ul>
		<h2>Security:</h2>
		<ul>
			<li>We take reasonable measures to protect your personal information from unauthorized access or disclosure.</li>
		</ul>
		<h2>Changes to this policy:</h2>
		<ul>
			<li>We may update this policy from time to time. We will notify you of any significant changes by email or by posting a notice on our website.</li>
		</ul>
	</main>
</body>
</html>
@endsection
