
@extends('layouts.app')
@section('content')
<body>
  <div class="wrapper">
    <div class="contact-form">
      <h2>Contact Us</h2>
      <form id="contact-form" method="POST" action="{{ route('contact.store') }}">
      @csrf
        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
        <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
        <button class="submit-btn" type="submit">Send Message</button>
      </form>
    </div>
  </div>
</body>

<style>
body {
  background: #f7f7f7;
  font-family: "Roboto", sans-serif;
}

.wrapper {
  max-width: 700px;
  margin: 0 auto;
}

.contact-form {
  background: #fff;
  padding: 40px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  text-align: center;
}

.contact-form h2 {
  color: #333;
  font-size: 32px;
  font-weight: 500;
  margin-bottom: 30px;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  font-family: "Roboto", sans-serif;
}

.contact-form textarea {
  resize: none;
  height: 150px;
}

.contact-form .submit-btn {
  background: #1e90ff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  font-family: "Roboto", sans-serif;
  transition: background 0.3s ease-in-out;
}

.contact-form .submit-btn:hover {
  background: #2d8cff;
}

@media only screen and (max-width: 768px) {
  .contact-form {
    padding: 20px;
  }
  
  .contact-form input,
  .contact-form textarea {
    font-size: 14px;
  }
  
  .contact-form .submit-btn {
    font-size: 16px;
  }
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

@endsection
