@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>
                <div class="card-body">
                    @auth
                    <div class="mb-3">
                        <strong>Name:</strong> {{ auth()->user()->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ auth()->user()->email }}
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <a href="{{ route('jobseeker.edit') }}" class="btn btn-primary btn-block">Edit Profile</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('jobseeker.settings') }}" class="btn btn-primary btn-block">Change Password</a>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>

@include('jobseeker.jobseeker_sidebar')

<style>
    body {
        background-image: url('../img/login.jpg');
        background-size: cover;
    }
    .card-body {
    padding: 30px;
    background-image: url('../img/signuo.jpg');
    background-size: cover;

    color:white;
}
 .btn-primary {
    background-color: #34495E;
    border: none;
    border-radius: 2px;
    box-shadow: none;
    font-weight: 600;
    padding: 10px 20px;
}
.container {
        margin-top: 200px;
        margin-left: 200px;
    }
</style>

@endsection

