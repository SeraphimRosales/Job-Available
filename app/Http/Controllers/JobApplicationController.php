<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\JobPosting;


class JobApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('jobseeker');
    }

    public function index()
    {
        $jobPostings = JobPosting::all();
        return view('employer.applications', compact('jobPostings'));
    }

    public function store(Request $request, $id)
    {
        // Validate form data
        $request->validate([
            'resume' => 'required|mimes:pdf|max:2048'
        ]);
    
        try {
            // Get the job posting being applied for
            $jobPosting = JobPosting::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return back()->with('error', 'Job posting not found.');
        }
    
        // Check if the user has already applied to this job posting
        if ($jobPosting->hasApplied(auth()->user())) {
            return back()->with('error', 'You have already applied to this job posting.');
        }
    
        // Create a new job application instance
        $application = new JobApplication([
            'user_id' => auth()->user()->id,
            'job_posting_id' => $jobPosting->id,
            'status' => 'applied'
        ]);
    
        // Save the job application to the database
        $application->save();
    
        // Store the resume file to storage/app/public/resumes folder
        $path = $request->file('resume')->store('public/resumes');
    
        // Update the job application with the resume file path
        $application->update([
            'resume_path' => $path
        ]);
    
        // Redirect to jobseeker dashboard
        return redirect()->route('jobseeker.dashboard')->with('success', 'Job application submitted successfully!');
    }
    
}
