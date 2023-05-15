<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apply A Job</title>
    <!-- other head elements -->
</head>
<body>
@extends('layouts.app')
    @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 bg-dark">
            @include('jobseeker.jobseeker_sidebar')
        </div>
        <div class="col-md-10">
            <div class="card bg-light shadow-lg rounded">
                <div class="card-body">
                    <h2 class="card-title">{{ $jobPosting->job_title }}</h2>
                    <h4 class="card-subtitle mb-3">{{ $jobPosting->company_name }}</h4>
                    <p class="card-text"><strong>Location:</strong> {{ $jobPosting->location }}</p>
                    <p class="card-text"><strong>Salary:</strong> {{ $jobPosting->job_salary }}</p>
                    <p class="card-text"><strong>Description:</strong> {{ $jobPosting->job_description }}</p>
                    <p class="card-text"><strong>Requirements:</strong> {{ $jobPosting->requirements }}</p>
                    <form method="POST" action="{{ route('jobseeker.store', $jobPosting) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="resume" class="form-label"><strong>Resume (PDF format only)</strong></label>
                            <br>
                            <input type="file" class="form-control-file @error('resume') is-invalid @enderror" id="resume" name="resume">
                            @error('resume')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <br>
                            <br>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<style>

.container {
        background-image: url('../img/login.jpg');
        background-size: cover;
    }
.card {
    margin-top: 20px;
    margin-left: 20px;
    padding: 20px;
    color: #333;
}

.bg-dark {
    height: 100%;
    color: #fff;
}

.card-title {
    font-size: 2.5rem;
    font-weight: bold;
}

.card-subtitle {
    font-size: 1.5rem;
    font-weight: bold;
}

.btn-primary {
    background-color: #333;
    border-color: #333;
}

.btn-primary:hover {
    background-color: #000;
    border-color: #000;
}

.form-label {
    font-weight: bold;
}

.form-control-file {
    color: #333;
}

.is-invalid {
    border-color: #dc3545;
}

.text-danger {
    color: #dc3545;
}
.container{
    margin-right: 150px;
    margin-top: 50px;
}
</style>
@endsection

