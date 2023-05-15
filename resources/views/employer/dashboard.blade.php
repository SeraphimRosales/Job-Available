@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-2">
<!-- Sidebar -->
@include('employer.employer_sidebar')
</div>
<div class="col-md-10">
@if (session('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<div class="card bg-light mb-3">
                <div class="card-header bg-dark text-white">
                    <h4>Post a new job</h4>
                </div>
                <div class="card-body">
                <form action="{{ route('employer.create') }}" method="POST" class="d-flex justify-content-center">
                        @csrf
                        <button type="submit" class="btn btn-secondary">Post Job</button>   
                    </form>
                </div>
            </div>


                <hr>

                <div class="card bg-light mb-3">
                    <div class="card-header bg-dark text-white">{{ __('Your Job Posts') }}</div>
                    <div class="card-body">
                    <table class="table table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Position</th>
            <th>Location</th>
            <th>Salary</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @if ($jobPostings)
            @foreach ($jobPostings as $jobPosting)
                <tr>
                    <td>{{ $jobPosting->job_title }}</td>
                    <td>{{ $jobPosting->position }}</td>
                    <td>{{ $jobPosting->location }}</td>
                    <td>{{ $jobPosting->job_salary }}</td>
                    <td>
                    <form action="{{ route('employer.delete', ['id' => $jobPosting->id]) }}" method="POST"class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">No job postings found.</td>
            </tr>
        @endif
    </tbody>
</table>

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
label {
font-weight: bold;
}
.card-header.bg-dark.text-white {
background-color: #343a40;
color: #fff;
}




</style>
@endsection
