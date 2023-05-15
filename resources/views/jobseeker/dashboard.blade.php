@extends('layouts.app')

@section('content')
    <div class="container" style="margin-left: 200px; background-image: url(../img/employer bg.jpg); background-size: cover;">
        <div class="d-flex justify-content-center mt-5">
            <div class="p-2 bd-highlight">
                <img src="/img/logo_black_fitted.png" alt="Logo" height="50">
            </div>
            <div class="p-2 bd-highlight align-self-center">
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="query" class="form-control rounded-pill border-0" placeholder="Search for jobs" aria-label="Search for jobs" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary rounded-pill border-0" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
        @foreach($jobPostings as $jobPosting)
            <div class="col-sm-4 mb-3">
                <div class="card" style="background-image: url('../img/employer bg.jpg'); background-size: cover;">
                    <div class="card-body" style="color: white;">
                        <h5 class="card-title">{{ $jobPosting->job_title }}</h5>
                        <p class="card-text">{{ $jobPosting->company_name }}</p>
                        <p class="card-text">{{ $jobPosting->location }}</p>
                        <p class="card-text">{{ $jobPosting->job_description }}</p>
                        <a href="{{ route('jobseeker.jobapply', ['id' => $jobPosting->id]) }}" class="btn btn-secondary">Apply</a>
                        <a href="mailto:{{ $jobPosting->user->email }}?subject=Job Application Concern&body=Dear {{ $jobPosting->company_name }},%0D%0A%0D%0AI have a concern regarding the job posting for {{ $jobPosting->job_title }}. %0D%0A%0D%0AThank you.%0D%0A%0D%0ARegards,%0D%0A" class="btn btn-secondary">Email</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('jobseeker.jobseeker_sidebar')
    <style>
        .btn-secondary {
          background-color: gray;
        }
        body {
            background-image: url('../img/login.jpg');
            background-size: cover;
        }
    </style>
@endsection
