<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerApplicationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employer'); // add this line
    }

    public function index()
    {
        $jobPostings = auth()->user()->jobPostings()->with('applications.user')->get();
        return view('employer.applications', compact('jobPostings'));
    }
    
}
