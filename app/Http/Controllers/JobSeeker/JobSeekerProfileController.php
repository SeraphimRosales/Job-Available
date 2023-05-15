<?php

namespace App\Http\Controllers\JobSeeker;

use App\Http\Controllers\Controller;
use App\Models\JobSeekerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobSeekerProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('jobseeker');
    }

    public function index()
    {
        $user = auth()->user();
        $profile = $user->jobSeekerProfile ?? new JobSeekerProfile();
        return view('jobseeker.profile', compact('user', 'profile'));
    }

    public function edit()
    {
        $user = Auth::user();
        $profile = $user->jobSeekerProfile ?? new JobSeekerProfile();
        return view('jobseeker.edit', compact('user', 'profile'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $profile = $user->jobSeekerProfile ?? new JobSeekerProfile();
        
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
          
        ]);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $user->jobSeekerProfile()->save($profile);
        
        return redirect()->route('jobseeker.profile')->with('success', 'Profile updated successfully!');
    }
    
    
    
    
}


