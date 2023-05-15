<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\JobPosting; // import the JobPosting model


class EmployerDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employer');
    }

    public function index()
    {
        
        $user = Auth::user();
        $jobPostings = $user->jobPostings;

        return view('employer.dashboard', compact('jobPostings'));
    }
    
}
