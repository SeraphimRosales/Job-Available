@extends('layouts.app')

@section('content')
<img src="../img/About Us.jpg">
<style>
.img{
  size: cover;
}

</style>
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
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>

<x-about-us2></x-about-us2>
@endsection

