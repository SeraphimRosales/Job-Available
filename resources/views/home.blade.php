@extends('layouts.app')

@section('content')

<div class="container-fluid hero-section d-flex align-items-center">
<div class="col-12 text-center m-auto p-5 ">
    <h1 class="title">WELCOME TO JOBBLE</h1>
    <p class="description">a platform for both employers and job seekers </p>
    <a href="{{ route('register') }}" class="btn-gray">Get Started</a>
</div>
</div>
</div>
<x-home-employer></x-home-employer>
<x-home-jobseeker></x-home-jobseeker>
<x-home-lastpage></x-home-lastpage>
@endsection
