@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2">
        <!-- Sidebar -->
        @include('employer.employer_sidebar')
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-dark text-white">{{ __('Post a Job') }}</div>
            <div class="card-body">
            <form method="POST" action="{{ route('job-postings.store') }}" class="registration-form">
                @csrf
                <div class="form-icon">
                    <span><i class="fas fa-briefcase"></i></span>
                </div>
                <div class="form-group">
                    <label for="job_title" class="text-dark">{{ __('Job Title') }}</label>
                    <input type="text" name="job_title" id="job_title" class="form-control item" required>
                </div>
                <div class="form-group">
                    <label for="job_description" class="text-dark">{{ __('Job Description') }}</label>
                    <textarea name="job_description" id="job_description" class="form-control item" required></textarea>
                </div>
                <div class="form-group">
                    <label for="job_salary" class="text-dark">{{ __('Job Salary') }}</label>
                    <input type="text" name="job_salary" id="job_salary" class="form-control item" required>
                </div>
                <div class="form-group">
                    <label for="position" class="text-dark">{{ __('Position') }}</label>
                    <input type="text" name="position" id="position" class="form-control item" required>
                </div>
                <div class="form-group">
                    <label for="requirements" class="text-dark">{{ __('Requirements') }}</label>
                    <textarea name="requirements" id="requirements" class="form-control item" required></textarea>
                </div>
                <div class="form-group">
                    <label for="location" class="text-dark">{{ __('Location') }}</label>
                    <input type="text" name="location" id="location" class="form-control item" required>
                </div>
                <div class="form-group">
                    <label for="company_name" class="text-dark">{{ __('Company Name') }}</label>
                    <input type="text" name="company_name" id="company_name" class="form-control item" required>
                </div>
                <div class="form-group">
                    <label for="company_website" class="text-dark">{{ __('Website') }}</label>
                    <input type="text" name="company_website" id="company_website" class="form-control item" required>
                </div>
                <br>
                <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Post a job</button>
                        </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            <style>
            background-image: url('../img/login.jpg');
            background-size: cover;

   
  </style>
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0 0 15px;
        }

        p {
            margin: 0 0 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            margin-top: 50px;
            margin-bottom: 50px;
            border-radius: 5px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        @media screen and (max-width: 600px) {
            .col-25,
            .col-75,
            input[type="submit"] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
@endsection
