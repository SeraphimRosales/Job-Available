<?php
namespace App\Http\Controllers\JobSeeker;
    
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Models\JobPosting;

    
    class JobSeekerChatController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('jobseeker');
        }
    
        public function chatWithEmployer($id)
        {
            $jobPosting = JobPosting::findOrFail($id);
        
            if ($jobPosting->employer) {
                $employerEmail = $jobPosting->employer->email;
                $subject = "Regarding Job Application for " . $jobPosting->job_title;
                $body = "Dear " . $jobPosting->employer->name . ",%0D%0A%0D%0AI am interested in applying for the job posting for " . $jobPosting->job_title . " at " . $jobPosting->company_name . ".%0D%0A%0D%0APlease let me know the next steps to proceed further.%0D%0A%0D%0AThank you,%0D%0A[Your Name]";
        
                $emailUrl = "mailto:" . $employerEmail . "?subject=" . $subject . "&body=" . $body;
        
                return redirect()->away($emailUrl);
            } else {
                return view('jobseeker.dashboard')->with('message', 'Sorry, Email Not Found');
            }
        }
        
}

