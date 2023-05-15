<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class EmployerProfile extends Model
{
    protected $fillable = [
        'name', 'email', 'company_name', 'company_website'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


