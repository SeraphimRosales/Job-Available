<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobPosting; 

class JobSeekerDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('jobseeker'); // add this line
    }

    public function index()
    {
        $jobPostings = JobPosting::all();
        return view('jobseeker.dashboard', ['jobPostings' => $jobPostings]);
    }
    
    public function dashboard()
    {
        $jobPostings = auth()->user()->jobPostings;
        return view('jobseeker.dashboard', compact('jobPostings'));
    }
    
    public function profile()
    {
        return view('jobseeker.profile');
    }

    public function settings()
    {
        return view('jobseeker.settings');
    }

    
    public function authenticated(Request $request, $user)
    {
        if ($user->role_id === 2) { 
            return redirect()->route('jobseeker.dashboard');
        }
        return redirect('/');
    }
    
}
