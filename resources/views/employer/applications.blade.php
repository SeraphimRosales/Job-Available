@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0">Applications</h1>
                </div>
                <div class="card-body">
                    @foreach($jobPostings as $jobPosting)
                    <div class="mb-5">
                        <h2>{{ $jobPosting->job_title }}</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Job Seeker's Name</th>
                                    <th>Resume</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($jobPosting->applications as $application)
    <tr>
        <td>{{ $application->user->name }}</td>
        <td>
            
        <a href="{{ Storage::url($application->resume_path) }}" target="_blank">View Resume</a>

</td>

        <td>
            <a href="mailto:{{ $application->user->email }}?subject=Job Application Concern&body=Dear {{ $application->user->name }},%0D%0A%0D%0AI have a concern regarding the job posting for {{ $jobPosting->job_title }}. %0D%0A%0D%0AThank you.%0D%0A%0D%0ARegards,%0D%0A" class="btn btn-secondary">Email</a>
        </td>
    </tr>
@endforeach

                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<style>
body {
            background-image: url('../img/login.jpg');
            background-size: cover;
        }
.container {
        margin-left:350px; /* Adjust this value to match the width of your sidebar */
        padding: 20px;
        background-image: url('../img/employer bg.jpg');
    background-size: cover;
    }

   
  </style>
@include('employer.employer_sidebar')

@endsection

