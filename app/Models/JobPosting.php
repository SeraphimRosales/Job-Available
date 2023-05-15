<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class JobPosting extends Model
{
    use HasFactory;

    protected $fillable = ['job_title', 'position', 'location', 'job_description', 'requirements', 'job_salary', 'company_name', 'company_website'];

    public function getSlugAttribute()
    {
        return Str::slug($this->job_title . ' ' . $this->id);
    }
    public function jobPostings()
    {
        return $this->hasMany(JobPosting::class);
    }
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function hasApplied(User $user)
    {
    return $this->applicants()->where('user_id', $user->id)->exists();
    }
    public function applications()
    {
        return $this->hasMany('App\Models\JobApplication', 'job_posting_id', 'id');
    }
    public function user()
{
    return $this->belongsTo(User::class)->withDefault();
}

public function applicants()
{
    return $this->belongsToMany(User::class, 'applications');
}


}

