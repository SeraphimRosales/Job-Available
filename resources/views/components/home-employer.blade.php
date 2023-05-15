
<!DOCTYPE html>
<html>
<head>
	<style>

.employer {
	background: url("../img/home bg.jpg") no-repeat center center fixed;
	background-size: cover;
	height: 100vh;
	color: black;
	text-align: center;
	padding: 50px;
}

.employer h1 {
	font-size: 43px;
	margin-bottom: 20px;
}

.employer h2 {
	font-size: 29px;
}

.employer h3 {
	font-size: 24px;
	margin-bottom: 20px;
}

.employer img {
	margin: 20px;
	max-width: 400px;
}

.btn-postajob {
	background-color: #333;
	color: #fff;
	padding: 10px 20px;
	border-radius: 5px;
	font-size: 16px;
	text-decoration: none;
	margin-right: 20px;
}

.btn-postajob:hover {
	background-color: #666;
}


	</style>
</head>

<body>

	
	<section class="employer">
		<h1>HAVING A HARD TIME FINDING  A RIGHT <br>CANDIDATE FOR YOUR COMPANY?</h1>
		<h2>Be an employer in JOBBLE.</h2>
        <br>
        <a href="{{ route('register') }}" class="btn-postajob text-center">Post A Job</a>
<br>
<br>
		<h3>Let us help you find the perfect fit for your team!</h3>

	</section>
    
</body>