<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmployerProfile;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'company_name' => ['required', 'string', 'max:255'],
            'company_website' => ['nullable', 'string', 'max:255'],
        ]);
    }
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'company_name' => $data['company_name'],
            'company_website' => $data['company_website'],
            'user_type' => 'employer',
        ]);
        $employerProfile = EmployerProfile::create([
            'user_id' => $user->id,
            'company_name' => $data['company_name'],
            'company_website' => $data['company_website'],
        ]);

        return $user;
    
    }
    
    
    protected function redirectTo()
    {
        if (auth()->user()->isJobSeeker()) {
            return '/jobseeker/dashboard';
        } else {
            return '/employer/dashboard';
        }
        
}
public function showRegistrationForm()
{
    return view('auth.register');
}

}




