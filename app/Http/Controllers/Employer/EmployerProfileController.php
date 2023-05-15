<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\EmployerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employer');
    }

    public function index()
    {
        $user = auth()->user();
        return view('employer.profile', compact('user'));
    }
    

    public function show()
    {
        $user = Auth::user();

        return view('employer.profile', [
            'user' => $user,
        ]);
    }
    public function edit()
    {
        return view('employer.edit', [
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->company_name = $request->input('company_name');
        $user->company_website = $request->input('company_website');
        $user->save();

        return redirect()->route('employer.profile')->with('success', 'Profile updated successfully!');
    }
}

