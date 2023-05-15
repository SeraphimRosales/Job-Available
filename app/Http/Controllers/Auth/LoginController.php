<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        if (Auth::check() && Auth::user()->user_type === 'jobseeker') {
            return route('jobseeker.dashboard');
        } elseif (Auth::check() && Auth::user()->user_type === 'employer') {
            return route('employer.dashboard');
        } else {
            return route('home');
        }
    }
    
    
}









