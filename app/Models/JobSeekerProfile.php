<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class JobSeekerProfile extends Model
{
    protected $fillable = [
        'name', 'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
