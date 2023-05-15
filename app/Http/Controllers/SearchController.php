<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $jobs = Job::where('title', 'LIKE', '%'.$query.'%')
                    ->orWhere('description', 'LIKE', '%'.$query.'%')
                    ->get();

        return view('search', compact('jobs'));
    }
}
