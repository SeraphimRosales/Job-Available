
<!DOCTYPE html>
<html>
<head>
	<style>


.jobseeker{
	background: url("../img/home bg.jpg") no-repeat center center fixed;
	background-size: cover;
	height: 100vh;
	color: black;
	text-align: center;
	padding: 50px;
}

.jobseeker h1 {
	font-size: 48px;
	margin-bottom: 20px;
}

.jobseeker h2 {
	font-size: 36px;
}

.jobseeker {
	text-align: center;
	padding: 50px;
}

.jobseeker h3 {
	font-size: 24px;
	margin-bottom: 20px;
}

.jobseeker img {
	margin: 20px;
	max-width: 400px;
}

.btn-applyajob {
	background-color: #333;
	color: #fff;
	padding: 10px 20px;
	border-radius: 5px;
	font-size: 16px;
	text-decoration: none;
	margin-right: 20px;
}

.btn-applyajob:hover {
	background-color: #666;
}

	</style>
</head>

<body>

	</header>
	<section class="jobseeker">
		<h1>FIND THE JOB THAT WORKS <br>PERFECTLY FOR YOU.</h1>
		<h2>Be a jobseeker in JOBBLE.</h2>
        <br>
        <a href="{{ route('register.jobseeker') }}"class="btn-applyajob text-center">Apply A Job</a>
<br>
<br>
		<h3>Reach your dream career with us!</h3>
	</section>
    
</body>

<!DOCTYPE html>
<html>
<head>
    <style>
        .footer {
            background: url("../img/nav bar.jpg") no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 30px 0;
        }

        .footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-logo {
            display: flex;
            align-items: center;
        }

        .footer-logo h3 {
            font-size: 24px;
            margin-left: 10px;
        }

        .footer-description {
            margin: 20px 0;
            line-height: 1.5;
        }

        .footer-links ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-end;
        }

        .footer-links li {
            margin-left: 20px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.2s ease-in-out;
        }

        .footer-links a:hover {
            color: #ccc;
        }
    </style>
</head>

<body>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="/img/logo_white_fitted.png" alt="Logo" style="height: 50px;">
                <h3>JOBBLE</h3>
            </div>
            <div class="footer-description">
                <p>Bridging the gap between employers and<br>job seekers with one click.</p>
            </div>
        </div>
        <div class="footer-links">
            <ul>
            <li>
            <a href="{{ route('aboutUs') }}">About Us</a>
        </li>
        <li>
            <a href="{{ route('contactUs') }}">Contact Us</a>
        </li>
        <li>
            <a href="{{ route('terms') }}">Terms and Conditions</a>
        </li>
        <li>
            <a href="{{ route('policy') }}">Privacy Policy</a>
        </li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
