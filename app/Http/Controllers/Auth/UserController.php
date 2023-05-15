<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // ... existing methods ...

    public function deleteAccount()
    {
        // Delete the authenticated user and their related data
        Auth::user()->deleteWithRelatedData();

        // Logout the user
        Auth::logout();

        // Redirect the user to the home page
        return redirect('/');
    }
}

