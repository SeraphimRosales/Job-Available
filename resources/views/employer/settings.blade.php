@extends('layouts.app')
@section('content')
<p>{{ $user->name }}</p>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Settings') }}</div>

                    <div class="card-body">
                    <form method="POST" action="{{ route('settings.updatePassword') }}">
    @csrf
    @method('PUT')
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                            <div class="form-group row">
                                <label for="old_password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password:') }}</label>

                                <div class="col-md-6">
                                    <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" required autocomplete="current-password">

                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
<br>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password:') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
<br>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password:') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
<br>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Change Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
<br>
<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete Account</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>

    body {
            background-image: url('../img/login.jpg');
            background-size: cover;
        font-family: "Open Sans", sans-serif;
        font-size: 14px;
        line-height: 1.5;
    }

    h2 {
        color: #444;
        font-weight: 600;
        margin-top: 40px;
        margin-bottom: 30px;
        text-align: center;
    }

    .card {
        border: none;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .card-header {
    background-color: #F7F7F7;
    border-bottom: 1px solid #DDD;
    font-weight: 600;
    padding: 20px;
}

.card-body {
    padding: 30px;
    background-image: url('../img/signuo.jpg');
    background-size: cover;

    color:black;
}

form label {
    font-weight: 600;
}

form .form-control {
    border-radius: 2px;
    border-color: #DDD;
    box-shadow: none;
    padding: 10px;
}

form .form-control:focus {
    border-color: #333;
    box-shadow: none;
}

form .btn-primary {
    background-color: #34495E;
    border: none;
    border-radius: 2px;
    box-shadow: none;
    font-weight: 600;
    padding: 10px 20px;
}

form .btn-primary:hover {
    background-color: #2C3E50;
}

form .btn-danger {
    background-color: #E74C3C;
    border: none;
    border-radius: 2px;
    box-shadow: none;
    font-weight: 600;
    padding: 10px 20px;
}

form .btn-danger:hover {
    background-color: #C0392B;
}
.container {
        margin-top: 100px;
        margin-left: 200px;
    }
    </style>
@include('employer.employer_sidebar')
@endsection