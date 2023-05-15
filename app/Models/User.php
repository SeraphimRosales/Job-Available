<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\JobPosting;
use App\Models\EmployerProfile;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jobSeekerProfile()
    {
        return $this->hasOne(JobSeekerProfile::class);
    }

    public function employerProfile()
    {
        return $this->hasOne(EmployerProfile::class);
    }

    public function jobPostings()
{
    return $this->hasMany(JobPosting::class);
}

    public function isJobSeeker()
    {
        return $this->user_type === 'jobseeker';
    }

    public function isEmployer()
    {
        return $this->user_type === 'employer';
    }
    public function deleteWithRelatedData()
    {
        $this->delete();
    }
}
