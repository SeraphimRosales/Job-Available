<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosting;
use Illuminate\Support\Facades\Auth;

class JobPostingController extends Controller
{

    public function create()
    {
        return view('employer.create');
    }
    public function index(Request $request)
    {
        $query = $request->input('query');
    
        if ($query) {
            $jobPostings = JobPosting::where('job_title', 'like', '%'.$query.'%')
                ->orWhere('company_name', 'like', '%'.$query.'%')
                ->orWhere('location', 'like', '%'.$query.'%')
                ->orWhere('job_description', 'like', '%'.$query.'%')
                ->paginate(5);
    
            return view('jobseeker.dashboard', compact('jobPostings'));
        }
    
        return view('jobseeker.dashboard');
    }
    
    public function apply($id)
    {
        try {
            // Get the job posting being applied for
            $jobPosting = JobPosting::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return back()->with('error', 'Job posting not found.');
        }
        
        return view('jobseeker.jobapply', compact('jobPosting'));
    }
    public function destroy($id)
{
    $jobPosting = JobPosting::findOrFail($id);

    if ($jobPosting->user_id !== Auth::id()) {
        return back()->with('error', 'You are not authorized to delete this job posting.');
    }

    $jobPosting->delete();

    return redirect('/employer/dashboard')->with('success', 'Job deleted successfully!');
}

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'job_title' => 'required',
            'position' => 'required',
            'location' => 'required',
            'job_description' => 'required',
            'requirements' => 'required',
            'job_salary' => 'required',
            'company_name' => 'required',
            'company_website' => 'required',
        ]);

        $jobPosting = new JobPosting;   
        $jobPosting->job_title = $validatedData['job_title'];
        $jobPosting->position = $validatedData['position'];
        $jobPosting->location = $validatedData['location'];
        $jobPosting->job_description = $validatedData['job_description'];
        $jobPosting->requirements = $validatedData['requirements'];
        $jobPosting->job_salary = $validatedData['job_salary'];
        $jobPosting->company_name = $validatedData['company_name'];
        $jobPosting->company_website = $validatedData['company_website'];

        $jobPosting->user_id = Auth::id();
        $jobPosting->email = Auth::user()->email;
        $jobPosting->save();
    
        return redirect('/employer/dashboard')->with('success', 'Job posting created successfully!');
    }
    public function viewResume($filename)
{
    // Get the full path to the resume file
    $file = storage_path('app/public/' . $filename);

    // Return the file response
    return response()->file($file);
}
public function search(Request $request)
{
    $query = $request->input('query');

    $jobPostings = JobPosting::where('job_title', 'LIKE', "%$query%")
        ->orWhere('company_name', 'LIKE', "%$query%")
        ->orWhere('location', 'LIKE', "%$query%")
        ->orWhere('job_description', 'LIKE', "%$query%")
        ->get();

    return view('jobseeker.dashboard', compact('jobPostings'));
}


    // Other resource methods go here
}
