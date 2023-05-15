@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Terms and Conditions</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}

		h1 {
			margin: 20px 0;
		}

		main {
			margin: 20px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #f5f5f5;
			line-height: 1.5;
			font-size: 16px;
		}

		ul {
			margin: 10px 0;
			padding-left: 20px;
		}

		li {
			margin-bottom: 5px;
		}

	</style>
</head>
<body>
<div class="container">
	<header>
		<h1>Terms and Conditions</h1>
	</header>
	<main>
		<p>By using this website, you agree to the following terms and conditions:</p>
		<ul>
			<li>The job listings on this website are provided as a service to both job seekers and employers. However, we do not guarantee the accuracy, completeness, or suitability of the information provided in these job listings.</li>
			<li>By using this website, you agree to indemnify and hold us harmless from any and all claims, damages, expenses, and liabilities arising out of your use of this website.</li>
			<li>We reserve the right to remove any job listing or user account for any reason, without notice or liability.</li>
			<li>All content on this website, including job listings, logos, and trademarks, is the property of the website owner and may not be used or reproduced without permission.</li>
			<li>We reserve the right to modify these terms and conditions at any time, without notice.</li>
		</ul>
	</main>
	</div>
</body>
</html>

@endsection
